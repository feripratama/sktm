<?php

/* Require */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/* Models */
use Bantenprov\Sktm\Models\Bantenprov\Sktm\Sktm;

class BantenprovSktmSeederSktm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
        Model::unguard();

        $sktms = (object) [
            (object) [
                'user_id' => '1',
                'siswa_id' => '1',
                'master_sktm_id' => '1',
                'no_sktm' => '1',
                'nilai' => '1'

            ],
            (object) [
                'user_id' => '2',
                'siswa_id' => '2',
                'master_sktm_id' => '2',
                'no_sktm' => '2',
                'nilai' => '2'
            ]
        ];

        foreach ($sktms as $sktm) {
            $model = Sktm::updateOrCreate(
                [
                   'user_id' => $sktm->user_id,
                   'master_sktm_id' => $sktm->master_sktm_id,
                   'siswa_id' => $sktm->siswa_id,
                   'no_sktm' => $sktm->no_sktm,
                   'nilai' => $sktm->nilai,
                ]
            );
            $model->save();
        }
	}
}



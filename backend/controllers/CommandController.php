<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\console\ExitCode;

/**
 * EquipoController implements the CRUD actions for Equipo model.
 */
class CommandController extends Controller
{
	public function actionPija($name = 'Unknown')
    {
        echo 'Hello world '.$name . "!! \n";

        return ExitCode::OK;
    }

    public function actionConcha($name = 'Unknown')
    {
        echo 'Good-bye world '.$name . "\n";

        return ExitCode::OK;
    }
}
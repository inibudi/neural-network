<?php

namespace App\Http\Controllers;


class FannController extends Controller
{

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Realiza o treinamento da rede neural
     */
    public function train()
    {
        $num_input = 2;
        $num_output = 1;
        $num_layers = 3;
        $num_neurons_hidden = 3;
        $desired_error = 0.001;
        $max_epochs = 500000;
        $epochs_between_reports = 1000;
        $ann = fann_create_standard($num_layers, $num_input, $num_neurons_hidden, $num_output);
        if ($ann) {
            fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
            fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);

            $filename = storage_path("app/public/xor.data");
            if (fann_train_on_file($ann, $filename, $max_epochs, $epochs_between_reports, $desired_error))
                print('xor trained.<br>' . PHP_EOL);
            if (fann_save($ann, storage_path("app/public/xor_float.net")))
                print('xor_float.net saved.<br><a href="simple_test.php">Test</a>' . PHP_EOL);
            fann_destroy($ann);
        }
    }

    /**
     * Realiza o teste da rede neural treinada
     */
    public function test()
    {
        $train_file = storage_path("app/public/xor_float.net");
        if (!is_file($train_file))
            die("The file xor_float.net has not been created! Please run simple_train.php to generate it" . PHP_EOL);
        $ann = fann_create_from_file($train_file);
        if ($ann) {
            $input = array(-1, 1);
            $calc_out = fann_run($ann, $input);
            printf("xor test (%f,%f) -> %f\n", $input[0], $input[1], $calc_out[0]);
            fann_destroy($ann);
        } else {
            die("Invalid file format" . PHP_EOL);
        }
    }
}

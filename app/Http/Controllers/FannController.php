<?php

namespace App\Http\Controllers;


use File;
use Illuminate\Http\Request;

class FannController extends Controller
{

    public static $PATHNAME_NET = "app/public/float.net";

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
     * @param Request $request
     * @return string
     */
    public function train(Request $request)
    {

        try {

            $filepathTrain = $request->file('file')->getPathname();

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

                if (fann_train_on_file($ann, $filepathTrain, $max_epochs, $epochs_between_reports, $desired_error)) {
                    $filepathTrained = storage_path(self::$PATHNAME_NET);
                    if (fann_save($ann, $filepathTrained)) {
                        fann_destroy($ann);
                        $content = File::get($filepathTrained);
                        return $content;
                    } else{
                        return "Ocorreu um erro ao salvar o treinamento.";
                    }
                } else {
                    return "Ocorreu um erro ao realizar o treinamento.";
                }
            } else{
                return "Ocorreu um erro ao realizar o treinamento.";
            }
        } catch (\Exception $e){
            return "Error: " . $e->getMessage();
        }
    }

    /**
     * Realiza o teste da rede neural treinada
     * @param Request $request
     * @return string
     */
    public function test(Request $request)
    {
        try {
            $filepathTrain = $request->file('file')->getPathname();

            $content = strtok(File::get($filepathTrain), "\n");
            $arrayInput = explode(" ", $content);

            $train_file = storage_path(self::$PATHNAME_NET);
            if (!is_file($train_file)) {
                return "Ocorreu um erro ao realizar o processamento. O arquivo de treinamento não foi encontrado, por favor realize o treinamento.";
            }
            $ann = fann_create_from_file($train_file);
            if ($ann) {
                $calc_out = fann_run($ann, $arrayInput);
                fann_destroy($ann);
                return $calc_out;
            } else {
                return "Ocorreu um erro ao realizar o processamento. O arquivo de treinamento é inválido, por favor realize novamente o treinamento.";
            }
        } catch (\Exception $e){
            return "Error: " . $e->getMessage();
        }
    }
}

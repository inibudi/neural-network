<?php

define('FANN_TRAIN_INCREMENTAL', 0);
define('FANN_TRAIN_BATCH', 1);
define('FANN_TRAIN_RPROP', 2);
define('FANN_TRAIN_QUICKPROP', 3);
define('FANN_TRAIN_SARPROP', 4);
define('FANN_LINEAR', 0);
define('FANN_THRESHOLD', 1);
define('FANN_THRESHOLD_SYMMETRIC', 2);
define('FANN_SIGMOID', 3);
define('FANN_SIGMOID_STEPWISE', 4);
define('FANN_SIGMOID_SYMMETRIC', 5);
define('FANN_SIGMOID_SYMMETRIC_STEPWISE', 6);
define('FANN_GAUSSIAN', 7);
define('FANN_GAUSSIAN_SYMMETRIC', 8);
define('FANN_GAUSSIAN_STEPWISE', 9);
define('FANN_ELLIOT', 10);
define('FANN_ELLIOT_SYMMETRIC', 11);
define('FANN_LINEAR_PIECE', 12);
define('FANN_LINEAR_PIECE_SYMMETRIC', 13);
define('FANN_SIN_SYMMETRIC', 14);
define('FANN_COS_SYMMETRIC', 15);
define('FANN_SIN', 16);
define('FANN_COS', 17);
define('FANN_ERRORFUNC_LINEAR', 0);
define('FANN_ERRORFUNC_TANH', 1);
define('FANN_STOPFUNC_MSE', 0);
define('FANN_STOPFUNC_BIT', 1);
define('FANN_NETTYPE_LAYER', 0);
define('FANN_NETTYPE_SHORTCUT', 1);
define('FANN_E_NO_ERROR', 0);
define('FANN_E_CANT_OPEN_CONFIG_R', 1);
define('FANN_E_CANT_OPEN_CONFIG_W', 2);
define('FANN_E_WRONG_CONFIG_VERSION', 3);
define('FANN_E_CANT_READ_CONFIG', 4);
define('FANN_E_CANT_READ_NEURON', 5);
define('FANN_E_CANT_READ_CONNECTIONS', 6);
define('FANN_E_WRONG_NUM_CONNECTIONS', 7);
define('FANN_E_CANT_OPEN_TD_W', 8);
define('FANN_E_CANT_OPEN_TD_R', 9);
define('FANN_E_CANT_READ_TD', 10);
define('FANN_E_CANT_ALLOCATE_MEM', 11);
define('FANN_E_CANT_TRAIN_ACTIVATION', 12);
define('FANN_E_CANT_USE_ACTIVATION', 13);
define('FANN_E_TRAIN_DATA_MISMATCH', 14);
define('FANN_E_CANT_USE_TRAIN_ALG', 15);
define('FANN_E_TRAIN_DATA_SUBSET', 16);
define('FANN_E_INDEX_OUT_OF_BOUND', 17);
define('FANN_E_SCALE_NOT_PRESENT', 18);
define('FANN_E_INPUT_NO_MATCH', 19);
define('FANN_E_OUTPUT_NO_MATCH', 20);

/**
 * Trains on an entire dataset, for a period of time using the Cascade2 training algorithm
 * 
 * @param resource $ann Neural network resource.
 * @param resource $data Neural network training data resource.
 * @param int $max_neurons The maximum number of neurons to be added to neural network.
 * @param int $neurons_between_reports The number of neurons between printing a status report. A value of zero means no reports should be printed.
 * @param float $desired_error The desired fann_get_MSE() or fann_get_bit_fail(),  depending on which stop function is chosen by fann_set_train_stop_function()
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_cascadetrain_on_data($ann, $data, $max_neurons, $neurons_between_reports, $desired_error) {}

/**
 * Trains on an entire dataset read from file, for a period of time using the Cascade2 training algorithm.
 * 
 * @param resource $ann Neural network resource.
 * @param string $filename The maximum number of neurons to be added to neural network
 * @param int $max_neurons The number of neurons between printing a status report to stdout.  A value of zero means no reports should be printed.
 * @param int $neurons_between_reports The number of neurons between printing a status report. A value of zero means no reports should be printed.
 * @param float $desired_error The desired fann_get_MSE() or fann_get_bit_fail(),  depending on which stop function is chosen by fann_set_train_stop_function().
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_cascadetrain_on_file($ann, $filename, $max_neurons, $neurons_between_reports, $desired_error) {}

/**
 * Clears scaling parameters
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_clear_scaling_params($ann) {}

/**
 * Creates a copy of a fann structure
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return resource Returns a copy of neural network resource on success, or FALSE on error
 */
function fann_copy($ann) {}

/**
 * Constructs a backpropagation neural network from a configuration file
 * 
 * @param string $configuration_file The configuration file path.
 * 
 * @return resource Returns a neural network resource on success, or FALSE on error.
 */
function fann_create_from_file($configuration_file) {}

/**
 * Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections
 * 
 * @param int $num_layers The total number of layers including the input and the output layer.
 * @param array $layers An array of layers sizes.
 * 
 * @return resource Returns a neural network resource on success, or FALSE on error.
 */
function fann_create_shortcut_array($num_layers, $layers) {}

/**
 * Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections
 * 
 * @param int $num_layers The total number of layers including the input and the output layer.
 * @param int $num_neurons1 Number of neurons in the first layer.
 * @param int $num_neurons2 Number of neurons in the second layer.
 * @param int ...$args Number of neurons in other layers.
 * 
 * @return reference Returns a neural network resource on success, or FALSE on error.
 */
function fann_create_shortcut($num_layers, $num_neurons1, $num_neurons2, ...$args) {}

/**
 * Creates a standard backpropagation neural network, which is not fully connected using an array of layer sizes
 * 
 * @param float $connection_rate The connection rate controls how many connections there will be in the network. If the connection rate  is set to 1, the network will be fully connected, but if it is set to 0.5 only half of the connections  will be set. A connection rate of 1 will yield the same result as fann_create_standard().
 * @param int $num_layers The total number of layers including the input and the output layer.
 * @param array $layers An array of layer sizes.
 * 
 * @return ReturnType Returns a neural network resource on success, or FALSE on error.
 */
function fann_create_sparse_array($connection_rate, $num_layers, $layers) {}

/**
 * Creates a standard backpropagation neural network, which is not fully connected
 * 
 * @param float $connection_rate The connection rate controls how many connections there will be in the network. If the connection rate  is set to 1, the network will be fully connected, but if it is set to 0.5 only half of the connections  will be set. A connection rate of 1 will yield the same result as fann_create_standard().
 * @param int $num_layers The total number of layers including the input and the output layer.
 * @param int $num_neurons1 Number of neurons in the first layer.
 * @param int $num_neurons2 Number of neurons in the second layer.
 * @param int ...$args Number of neurons in other layers.
 * 
 * @return resource Returns a neural network resource on success, or FALSE on error.
 */
function fann_create_sparse($connection_rate, $num_layers, $num_neurons1, $num_neurons2, ...$args) {}

/**
 * Creates a standard fully connected backpropagation neural network using an array of layer sizes
 * 
 * @param int $num_layers The total number of layers including the input and the output layer.
 * @param array $layers An array of layer sizes.
 * 
 * @return resource Returns a neural network resource on success, or FALSE on error.
 */
function fann_create_standard_array($num_layers, $layers) {}

/**
 * Creates a standard fully connected backpropagation neural network
 * 
 * @param int $num_layers The total number of layers including the input and the output layer.
 * @param int $num_neurons1 Number of neurons in the first layer.
 * @param int $num_neurons2 Number of neurons in the second layer.
 * @param int ...$args Number of neurons in other layers.
 * 
 * @return resource Returns a neural network resource on success, or FALSE on error.
 */
function fann_create_standard($num_layers, $num_neurons1, $num_neurons2, ...$args) {}

/**
 * Creates the training data struct from a user supplied function
 * 
 * @param int $num_data The number of training data
 * @param int $num_input The number of inputs per training data
 * @param int $num_output The number of ouputs per training data
 * @param callable $user_function The user supplied function with following parameters:  num - The number of the training data set  num_input - The number of inputs per training data  num_output - The number of ouputs per training data  The function should return an associative array with keys input and output and  two array values of input and output.
 * 
 * @return resource Returns a train data resource on success, or FALSE on error.
 */
function fann_create_train_from_callback($num_data, $num_input, $num_output, $user_function) {}

/**
 * Creates an empty training data struct
 * 
 * @param int $num_data The number of training data
 * @param int $num_input The number of inputs per training data
 * @param int $num_output The number of ouputs per training data
 * 
 * @return resource Returns a train data resource on success, or FALSE on error.
 */
function fann_create_train($num_data, $num_input, $num_output) {}

/**
 * Scale data in input vector after get it from ann based on previously calculated parameters
 * 
 * @param resource $ann Neural network resource.
 * @param array $input_vector Input vector that will be descaled
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_descale_input($ann, $input_vector) {}

/**
 * Scale data in output vector after get it from ann based on previously calculated parameters
 * 
 * @param resource $ann Neural network resource.
 * @param array $output_vector Output vector that will be descaled
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_descale_output($ann, $output_vector) {}

/**
 * Descale input and output data based on previously calculated parameters
 * 
 * @param resource $ann Neural network resource.
 * @param resource $train_data Neural network training data resource.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_descale_train($ann, $train_data) {}

/**
 * Destructs the training data
 * 
 * @param resource $train_data Neural network training data resource.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_destroy_train($train_data) {}

/**
 * Destroys the entire network and properly freeing all the associated memory
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_destroy($ann) {}

/**
 * Returns an exact copy of a fann train data
 * 
 * @param resource $data Neural network training data resource.
 * 
 * @return resource Returns a train data resource on success, or FALSE on error.
 */
function fann_duplicate_train_data($data) {}

/**
 * Returns the activation function
 * 
 * @param resource $ann Neural network resource.
 * @param int $layer Layer number.
 * @param int $neuron Neuron number.
 * 
 * @return int Learning functions constant or -1 if the neuron is not defined in the neural network, or FALSE on error.
 */
function fann_get_activation_function($ann, $layer, $neuron) {}

/**
 * Returns the activation steepness for supplied neuron and layer number
 * 
 * @param resource $ann Neural network resource.
 * @param int $layer Layer number
 * @param int $neuron Neuron number
 * 
 * @return float The activation steepness for the neuron or -1 if the neuron is not defined in the neural network, or FALSE on error.
 */
function fann_get_activation_steepness($ann, $layer, $neuron) {}

/**
 * Get the number of bias in each layer in the network
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return array An array of numbers of bias in each layer
 */
function fann_get_bias_array($ann) {}

/**
 * Returns the bit fail limit used during training
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The bit fail limit, or FALSE on error.
 */
function fann_get_bit_fail_limit($ann) {}

/**
 * The number of fail bits
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The number of bits fail, or FALSE on error.
 */
function fann_get_bit_fail($ann) {}

/**
 * Returns the number of cascade activation functions
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The number of cascade activation functions, or FALSE on error.
 */
function fann_get_cascade_activation_functions_count($ann) {}

/**
 * Returns the cascade activation functions
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return array The cascade activation functions, or FALSE on error.
 */
function fann_get_cascade_activation_functions($ann) {}

/**
 * The number of activation steepnesses
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The number of activation steepnesses, or FALSE on error.
 */
function fann_get_cascade_activation_steepnesses_count($ann) {}

/**
 * Returns the cascade activation steepnesses
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return array The cascade activation steepnesses, or FALSE on error.
 */
function fann_get_cascade_activation_steepnesses($ann) {}

/**
 * Returns the cascade candidate change fraction
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The cascade candidate change fraction, or FALSE on error.
 */
function fann_get_cascade_candidate_change_fraction($ann) {}

/**
 * Return the candidate limit
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The candidate limit, or FALSE on error.
 */
function fann_get_cascade_candidate_limit($ann) {}

/**
 * Returns the number of cascade candidate stagnation epochs
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The number of cascade candidate stagnation epochs, or FALSE on error.
 */
function fann_get_cascade_candidate_stagnation_epochs($ann) {}

/**
 * Returns the maximum candidate epochs
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The maximum candidate epochs, or FALSE on error.
 */
function fann_get_cascade_max_cand_epochs($ann) {}

/**
 * Returns the maximum out epochs
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The maximum out epochs, or FALSE on error.
 */
function fann_get_cascade_max_out_epochs($ann) {}

/**
 * Returns the minimum candidate epochs
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The minimum candidate epochs, or FALSE on error.
 */
function fann_get_cascade_min_cand_epochs($ann) {}

/**
 * Returns the minimum out epochs
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The minimum out epochs, or FALSE on error.
 */
function fann_get_cascade_min_out_epochs($ann) {}

/**
 * Returns the number of candidate groups
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The number of candidate groups, or FALSE on error.
 */
function fann_get_cascade_num_candidate_groups($ann) {}

/**
 * Returns the number of candidates used during training
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The number of candidates used during training, or FALSE on error.
 */
function fann_get_cascade_num_candidates($ann) {}

/**
 * Returns the cascade output change fraction
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The cascade output change fraction, or FALSE on error.
 */
function fann_get_cascade_output_change_fraction($ann) {}

/**
 * Returns the number of cascade output stagnation epochs
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The number of cascade output stagnation epochs, or FALSE on error.
 */
function fann_get_cascade_output_stagnation_epochs($ann) {}

/**
 * Returns the weight multiplier
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The weight multiplier, or FALSE on error.
 */
function fann_get_cascade_weight_multiplier($ann) {}

/**
 * Get connections in the network
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return array An array of connections in the network
 */
function fann_get_connection_array($ann) {}

/**
 * Get the connection rate used when the network was created
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The connection rate used when the network was created, or FALSE on error.
 */
function fann_get_connection_rate($ann) {}

/**
 * Returns the last error number
 * 
 * @param resource $errdat Either neural network resource or neural network trainining data resource.
 * 
 * @return int The error number, or FALSE on error.
 */
function fann_get_errno($errdat) {}

/**
 * Returns the last errstr
 * 
 * @param resource $errdat Either neural network resource or neural network trainining data resource.
 * 
 * @return string The last error string, or FALSE on error.
 */
function fann_get_errstr($errdat) {}

/**
 * Get the number of neurons in each layer in the network
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return array An array of numbers of neurons in each leayer
 */
function fann_get_layer_array($ann) {}

/**
 * Returns the learning momentum
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float Returns TRUE on success, or FALSE otherwise.
 */
function fann_get_learning_momentum($ann) {}

/**
 * Returns the learning rate
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The learning rate, or FALSE on error.
 */
function fann_get_learning_rate($ann) {}

/**
 * Reads the mean square error from the network
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The mean square error, or FALSE on error.
 */
function fann_get_MSE($ann) {}

/**
 * Get the type of neural network it was created as
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int Network type constant, or FALSE on error.
 */
function fann_get_network_type($ann) {}

/**
 * Get the number of input neurons
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int Number of input neurons, or FALSE on error
 */
function fann_get_num_input($ann) {}

/**
 * Get the number of layers in the neural network
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The number of leayers in the neural network, or FALSE on error.
 */
function fann_get_num_layers($ann) {}

/**
 * Get the number of output neurons
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int Number of output neurons, or FALSE on error
 */
function fann_get_num_output($ann) {}

/**
 * Returns the decay which is a factor that weights should decrease in each iteration during quickprop training
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The decay, or FALSE on error.
 */
function fann_get_quickprop_decay($ann) {}

/**
 * Returns the mu factor
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The mu factor, or FALSE on error.
 */
function fann_get_quickprop_mu($ann) {}

/**
 * Returns the increase factor used during RPROP training
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The decrease factor, or FALSE on error.
 */
function fann_get_rprop_decrease_factor($ann) {}

/**
 * Returns the maximum step-size
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The maximum step-size, or FALSE on error.
 */
function fann_get_rprop_delta_max($ann) {}

/**
 * Returns the minimum step-size
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The minimum step-size, or FALSE on error.
 */
function fann_get_rprop_delta_min($ann) {}

/**
 * Returns the initial step-size
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return ReturnType The initial step-size, or FALSE on error.
 */
function fann_get_rprop_delta_zero($ann) {}

/**
 * Returns the increase factor used during RPROP training
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The increase factor, or FALSE on error.
 */
function fann_get_rprop_increase_factor($ann) {}

/**
 * Returns the sarprop step error shift
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The sarprop step error shift , or FALSE on error.
 */
function fann_get_sarprop_step_error_shift($ann) {}

/**
 * Returns the sarprop step error threshold factor
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The sarprop step error threshold factor, or FALSE on error.
 */
function fann_get_sarprop_step_error_threshold_factor($ann) {}

/**
 * Returns the sarprop temperature
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The sarprop temperature, or FALSE on error.
 */
function fann_get_sarprop_temperature($ann) {}

/**
 * Returns the sarprop weight decay shift
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return float The sarprop weight decay shift, or FALSE on error.
 */
function fann_get_sarprop_weight_decay_shift($ann) {}

/**
 * Get the total number of connections in the entire network
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int Total number of connections in the entire network, or FALSE on error
 */
function fann_get_total_connections($ann) {}

/**
 * Get the total number of neurons in the entire network
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int Total number of neurons in the entire network, or FALSE on error.
 */
function fann_get_total_neurons($ann) {}

/**
 * Returns the error function used during training
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The error function constant, or FALSE on error.
 */
function fann_get_train_error_function($ann) {}

/**
 * Returns the stop function used during training
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int The stop function constant, or FALSE on error.
 */
function fann_get_train_stop_function($ann) {}

/**
 * Returns the training algorithm
 * 
 * @param resource $ann Neural network resource.
 * 
 * @return int Training algorithm constant, or FALSE on error.
 */
function fann_get_training_algorithm($ann) {}

/**
 * Initialize the weights using Widrow + Nguyen’s algorithm
 * 
 * @param resource $ann Neural network resource.
 * @param resource $train_data Neural network training data resource.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_init_weights($ann, $train_data) {}

/**
 * Returns the number of training patterns in the train data
 * 
 * @param resource $data Neural network training data resource.
 * 
 * @return int Number of elements in the train data resource, or FALSE on error.
 */
function fann_length_train_data($data) {}

/**
 * Merges the train data
 * 
 * @param resource $data1 Neural network training data resource.
 * @param resource $data2 Neural network training data resource.
 * 
 * @return resource New merged train data resource, or FALSE on error.
 */
function fann_merge_train_data($data1, $data2) {}

/**
 * Returns the number of inputs in each of the training patterns in the train data
 * 
 * @param resource $data Neural network training data resource.
 * 
 * @return int The number of inputs, or FALSE on error.
 */
function fann_num_input_train_data($data) {}

/**
 * Returns the number of outputs in each of the training patterns in the train data
 * 
 * @param resource $data Neural network training data resource.
 * 
 * @return int The number of outputs, or FALSE on error.
 */
function fann_num_output_train_data($data) {}

/**
 * Prints the error string
 * 
 * @param string $errdat Either neural network resource or neural network trainining data resource.
 * 
 * @return void No value is returned.
 */
function fann_print_error($errdat) {}

/**
 * Give each connection a random weight between min_weight and max_weight
 * 
 * @param resource $ann Neural network resource.
 * @param float $min_weight Minimum weight value
 * @param float $max_weight Maximum weight value
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_randomize_weights($ann, $min_weight, $max_weight) {}

/**
 * Reads a file that stores training data
 * 
 * @param string $filename The input file in the following format:  num_train_data num_input num_output inputdata seperated by space outputdata seperated by space . . . inputdata seperated by space outputdata seperated by space
 * 
 * @return resource Returns a train data resource on success, or FALSE on error.
 */
function fann_read_train_from_file($filename) {}

/**
 * Resets the last error number
 * 
 * @param resource $errdat Either neural network resource or neural network trainining data resource.
 * 
 * @return void No value is returned.
 */
function fann_reset_errno($errdat) {}

/**
 * Resets the last error string
 * 
 * @param resource $errdat Either neural network resource or neural network trainining data resource.
 * 
 * @return void No value is returned.
 */
function fann_reset_errstr($errdat) {}

/**
 * Resets the mean square error from the network
 * 
 * @param string $ann Neural network resource.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_reset_MSE($ann) {}

/**
 * Will run input through the neural network
 * 
 * @param resource $ann Neural network resource.
 * @param array $input Array of input values
 * 
 * @return array Array of output values, or FALSE on error
 */
function fann_run($ann, $input) {}

/**
 * Save the training structure to a file
 * 
 * @param resource $data Neural network training data resource.
 * @param string $file_name The file name of the file where training data is saved to.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_save_train($data, $file_name) {}

/**
 * Saves the entire network to a configuration file
 * 
 * @param resource $ann Neural network resource.
 * @param string $configuration_file The configuration file path.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_save($ann, $configuration_file) {}

/**
 * Scales the inputs in the training data to the specified range
 * 
 * @param resource $train_data Neural network training data resource.
 * @param float $new_min New minimum after scaling inputs in training data.
 * @param float $new_max New maximum after scaling inputs in training data.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_scale_input_train_data($train_data, $new_min, $new_max) {}

/**
 * Scale data in input vector before feed it to ann based on previously calculated parameters
 * 
 * @param resource $ann Neural network resource.
 * @param array $input_vector Input vector that will be scaled
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_scale_input($ann, $input_vector) {}

/**
 * Scales the outputs in the training data to the specified range
 * 
 * @param resource $train_data Neural network training data resource.
 * @param float $new_min New minimum after scaling outputs in training data.
 * @param float $new_max New maximum after scaling outputs in training data.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_scale_output_train_data($train_data, $new_min, $new_max) {}

/**
 * Scale data in output vector before feed it to ann based on previously calculated parameters
 * 
 * @param resource $ann Neural network resource.
 * @param array $output_vector Output vector that will be scaled
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_scale_output($ann, $output_vector) {}

/**
 * Scales the inputs and outputs in the training data to the specified range
 * 
 * @param resource $train_data Neural network training data resource.
 * @param float $new_min New minimum after scaling inputs and outputs in training data.
 * @param float $new_max New maximum after scaling inputs and outputs in training data.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_scale_train_data($train_data, $new_min, $new_max) {}

/**
 * Scale input and output data based on previously calculated parameters
 * 
 * @param resource $ann Neural network resource.
 * @param resource $train_data Neural network training data resource.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_scale_train($ann, $train_data) {}

/**
 * Sets the activation function for all of the hidden layers
 * 
 * @param resource $ann Neural network resource.
 * @param int $activation_function The activation functions constant.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_activation_function_hidden($ann, $activation_function) {}

/**
 * Sets the activation function for all the neurons in the supplied layer.
 * 
 * @param resource $ann Neural network resource.
 * @param int $activation_function The activation functions constant.
 * @param int $layer Layer number.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_activation_function_layer($ann, $activation_function, $layer) {}

/**
 * Sets the activation function for the output layer
 * 
 * @param resource $ann Neural network resource.
 * @param int $activation_function The activation functions constant.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_activation_function_output($ann, $activation_function) {}

/**
 * Sets the activation function for supplied neuron and layer
 * 
 * @param resource $ann Neural network resource.
 * @param int $activation_function The activation functions constant.
 * @param int $layer Layer number.
 * @param int $neuron Neuron number.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_activation_function($ann, $activation_function, $layer, $neuron) {}

/**
 * Sets the steepness of the activation steepness for all neurons in the all hidden layers
 * 
 * @param resource $ann Neural network resource.
 * @param float $activation_steepness The activation steepness.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_activation_steepness_hidden($ann, $activation_steepness) {}

/**
 * Sets the activation steepness for all of the neurons in the supplied layer number
 * 
 * @param resource $ann Neural network resource.
 * @param float $activation_steepness The activation steepness.
 * @param int $layer Layer number.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_activation_steepness_layer($ann, $activation_steepness, $layer) {}

/**
 * Sets the steepness of the activation steepness in the output layer
 * 
 * @param resource $ann Neural network resource.
 * @param float $activation_steepness The activation steepness.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_activation_steepness_output($ann, $activation_steepness) {}

/**
 * Sets the activation steepness for supplied neuron and layer number
 * 
 * @param resource $ann Neural network resource.
 * @param float $activation_steepness The activation steepness.
 * @param int $layer Layer number.
 * @param int $neuron Neuron number.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_activation_steepness($ann, $activation_steepness, $layer, $neuron) {}

/**
 * Set the bit fail limit used during training
 * 
 * @param resource $ann Neural network resource.
 * @param float $bit_fail_limit The bit fail limit.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_bit_fail_limit($ann, $bit_fail_limit) {}

/**
 * Sets the callback function for use during training
 * 
 * @param resource $ann Neural network resource.
 * @param collable $callback The supplied callback function takes following parameters:  ann - The neural network resource  train - The train data resource  or NULL if called from fann_train_on_file()  max_epochs - The maximum number of epochs the training should continue  epochs_between_reports - The number of epochs between calling this function  desired_error - The desired fann_get_MSE() or  fann_get_bit_fail(), depending on the stop function chosen by  fann_set_train_stop_function()  epochs - The current epoch  The callback should return TRUE. If it returns FALSE, the training will terminate.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_callback($ann, $callback) {}

/**
 * Sets the array of cascade candidate activation functions
 * 
 * @param resource $ann Neural network resource.
 * @param array $cascade_activation_functions The array of cascade candidate activation functions.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_activation_functions($ann, $cascade_activation_functions) {}

/**
 * Sets the array of cascade candidate activation steepnesses
 * 
 * @param resource $ann Neural network resource.
 * @param array $cascade_activation_steepnesses_count The array of cascade candidate activation steepnesses.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_activation_steepnesses($ann, $cascade_activation_steepnesses_count) {}

/**
 * Sets the cascade candidate change fraction
 * 
 * @param resource $ann Neural network resource.
 * @param float $cascade_candidate_change_fraction The cascade candidate change fraction.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_candidate_change_fraction($ann, $cascade_candidate_change_fraction) {}

/**
 * Sets the candidate limit
 * 
 * @param resource $ann Neural network resource.
 * @param float $cascade_candidate_limit The candidate limit.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_candidate_limit($ann, $cascade_candidate_limit) {}

/**
 * Sets the number of cascade candidate stagnation epochs
 * 
 * @param resource $ann Neural network resource.
 * @param int $cascade_candidate_stagnation_epochs The number of cascade candidate stagnation epochs.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_candidate_stagnation_epochs($ann, $cascade_candidate_stagnation_epochs) {}

/**
 * Sets the max candidate epochs
 * 
 * @param resource $ann Neural network resource.
 * @param int $cascade_max_cand_epochs The max candidate epochs.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_max_cand_epochs($ann, $cascade_max_cand_epochs) {}

/**
 * Sets the maximum out epochs
 * 
 * @param resource $ann Neural network resource.
 * @param int $cascade_max_out_epochs The maximum out epochs.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_max_out_epochs($ann, $cascade_max_out_epochs) {}

/**
 * Sets the min candidate epochs
 * 
 * @param resource $ann Neural network resource.
 * @param int $cascade_min_cand_epochs The minimum candidate epochs.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_min_cand_epochs($ann, $cascade_min_cand_epochs) {}

/**
 * Sets the minimum out epochs
 * 
 * @param resource $ann Neural network resource.
 * @param int $cascade_min_out_epochs The minimum out epochs.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_min_out_epochs($ann, $cascade_min_out_epochs) {}

/**
 * Sets the number of candidate groups
 * 
 * @param resource $ann Neural network resource.
 * @param int $cascade_num_candidate_groups The number of candidate groups.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_num_candidate_groups($ann, $cascade_num_candidate_groups) {}

/**
 * Sets the cascade output change fraction
 * 
 * @param resource $ann Neural network resource.
 * @param float $cascade_output_change_fraction The cascade output change fraction.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_output_change_fraction($ann, $cascade_output_change_fraction) {}

/**
 * Sets the number of cascade output stagnation epochs
 * 
 * @param resource $ann Neural network resource.
 * @param int $cascade_output_stagnation_epochs The number of cascade output stagnation epochs.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_output_stagnation_epochs($ann, $cascade_output_stagnation_epochs) {}

/**
 * Sets the weight multiplier
 * 
 * @param resource $ann Neural network resource.
 * @param float $cascade_weight_multiplier The weight multiplier.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_cascade_weight_multiplier($ann, $cascade_weight_multiplier) {}

/**
 * Sets where the errors are logged to
 * 
 * @param resource $errdat Either neural network resource or neural network trainining data resource.
 * @param string $log_file The log file path.
 * 
 * @return void No value is returned.
 */
function fann_set_error_log($errdat, $log_file) {}

/**
 * Calculate input scaling parameters for future use based on training data
 * 
 * @param resource $ann Neural network resource.
 * @param resource $train_data Neural network training data resource.
 * @param float $new_input_min The desired lower bound in input data after scaling (not strictly followed)
 * @param float $new_input_max The desired upper bound in input data after scaling (not strictly followed)
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_input_scaling_params($ann, $train_data, $new_input_min, $new_input_max) {}

/**
 * Sets the learning momentum
 * 
 * @param resource $ann Neural network resource.
 * @param float $learning_momentum The learning momentum.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_learning_momentum($ann, $learning_momentum) {}

/**
 * Sets the learning rate
 * 
 * @param resource $ann Neural network resource.
 * @param float $learning_rate The learning rate.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_learning_rate($ann, $learning_rate) {}

/**
 * Calculate output scaling parameters for future use based on training data
 * 
 * @param resource $ann Neural network resource.
 * @param resource $train_data Neural network training data resource.
 * @param float $new_output_min The desired lower bound in output data after scaling (not strictly followed)
 * @param float $new_output_max The desired upper bound in output data after scaling (not strictly followed)
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_output_scaling_params($ann, $train_data, $new_output_min, $new_output_max) {}

/**
 * Sets the quickprop decay factor
 * 
 * @param resource $ann Neural network resource.
 * @param float $quickprop_decay The quickprop decay factor.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_quickprop_decay($ann, $quickprop_decay) {}

/**
 * Sets the quickprop mu factor
 * 
 * @param resource $ann Neural network resource.
 * @param float $quickprop_mu The mu factor.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_quickprop_mu($ann, $quickprop_mu) {}

/**
 * Sets the decrease factor used during RPROP training
 * 
 * @param resource $ann Neural network resource.
 * @param float $rprop_decrease_factor The decrease factor.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_rprop_decrease_factor($ann, $rprop_decrease_factor) {}

/**
 * Sets the maximum step-size
 * 
 * @param resource $ann Neural network resource.
 * @param float $rprop_delta_max The maximum step-size.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_rprop_delta_max($ann, $rprop_delta_max) {}

/**
 * Sets the minimum step-size
 * 
 * @param resource $ann Neural network resource.
 * @param float $rprop_delta_min The minimum step-size.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_rprop_delta_min($ann, $rprop_delta_min) {}

/**
 * Sets the initial step-size
 * 
 * @param resource $ann Neural network resource.
 * @param float $rprop_delta_zero The initial step-size.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_rprop_delta_zero($ann, $rprop_delta_zero) {}

/**
 * Sets the increase factor used during RPROP training
 * 
 * @param resource $ann Neural network resource.
 * @param float $rprop_increase_factor The increase factor.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_rprop_increase_factor($ann, $rprop_increase_factor) {}

/**
 * Sets the sarprop step error shift
 * 
 * @param resource $ann Neural network resource.
 * @param float $sarprop_step_error_shift The sarprop step error shift.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_sarprop_step_error_shift($ann, $sarprop_step_error_shift) {}

/**
 * Sets the sarprop step error threshold factor
 * 
 * @param resource $ann Neural network resource.
 * @param float $sarprop_step_error_threshold_factor The sarprop step error threshold factor.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_sarprop_step_error_threshold_factor($ann, $sarprop_step_error_threshold_factor) {}

/**
 * Sets the sarprop temperature
 * 
 * @param resource $ann Neural network resource.
 * @param float $sarprop_temperature The sarprop temperature.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_sarprop_temperature($ann, $sarprop_temperature) {}

/**
 * Sets the sarprop weight decay shift
 * 
 * @param resource $ann Neural network resource.
 * @param float $sarprop_weight_decay_shift The sarprop weight decay shift.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_sarprop_weight_decay_shift($ann, $sarprop_weight_decay_shift) {}

/**
 * Calculate input and output scaling parameters for future use based on training data
 * 
 * @param resource $ann Neural network resource.
 * @param resource $train_data Neural network training data resource.
 * @param float $new_input_min The desired lower bound in input data after scaling (not strictly followed)
 * @param float $new_input_max The desired upper bound in input data after scaling (not strictly followed)
 * @param float $new_output_min The desired lower bound in output data after scaling (not strictly followed)
 * @param float $new_output_max The desired upper bound in output data after scaling (not strictly followed)
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_scaling_params($ann, $train_data, $new_input_min, $new_input_max, $new_output_min, $new_output_max) {}

/**
 * Sets the error function used during training
 * 
 * @param resource $ann Neural network resource.
 * @param int $error_function The error function constant
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_train_error_function($ann, $error_function) {}

/**
 * Sets the stop function used during training
 * 
 * @param resource $ann Neural network resource.
 * @param int $stop_function The stop function constant.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_train_stop_function($ann, $stop_function) {}

/**
 * Sets the training algorithm
 * 
 * @param resource $ann Neural network resource.
 * @param int $training_algorithm Training algorithm constant
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_training_algorithm($ann, $training_algorithm) {}

/**
 * Set connections in the network
 * 
 * @param resource $ann Neural network resource.
 * @param array $connections An array of FANNConnection objects
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_weight_array($ann, $connections) {}

/**
 * Set a connection in the network
 * 
 * @param resource $ann Neural network resource.
 * @param int $from_neuron The neuron where the connection starts
 * @param int $to_neuron The neuron where the connection ends
 * @param float $weight Connection weight
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_set_weight($ann, $from_neuron, $to_neuron, $weight) {}

/**
 * Shuffles training data, randomizing the order
 * 
 * @param resource $train_data Neural network training data resource.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_shuffle_train_data($train_data) {}

/**
 * Returns an copy of a subset of the train data
 * 
 * @param resource $data Neural network training data resource.
 * @param int $pos Starting position.
 * @param int $length The number of copied elements.
 * 
 * @return resource Returns a train data resource on success, or FALSE on error.
 */
function fann_subset_train_data($data, $pos, $length) {}

/**
 * Test a set of training data and calculates the MSE for the training data
 * 
 * @param resource $ann Neural network resource.
 * @param resource $data Neural network training data resource.
 * 
 * @return float The updated MSE, or FALSE on error.
 */
function fann_test_data($ann, $data) {}

/**
 * Test with a set of inputs, and a set of desired outputs
 * 
 * @param resource $ann Neural network resource.
 * @param array $input An array of inputs. This array must be exactly fann_get_num_input() long.
 * @param array $desired_output An array of desired outputs. This array must be exactly fann_get_num_output() long.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_test($ann, $input, $desired_output) {}

/**
 * Train one epoch with a set of training data
 * 
 * @param resource $ann Neural network resource.
 * @param resource $data Neural network training data resource.
 * 
 * @return float The MSE, or FALSE on error.
 */
function fann_train_epoch($ann, $data) {}

/**
 * Trains on an entire dataset for a period of time
 * 
 * @param resource $ann Neural network resource.
 * @param resource $data Neural network training data resource.
 * @param int $max_epochs The maximum number of epochs the training should continue
 * @param int $epochs_between_reports The number of epochs between calling a callback function. A value of zero means that user function is not called.
 * @param float $desired_error The desired fann_get_MSE() or fann_get_bit_fail(), depending on the stop function  chosen by fann_set_train_stop_function()
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_train_on_data($ann, $data, $max_epochs, $epochs_between_reports, $desired_error) {}

/**
 * Trains on an entire dataset, which is read from file, for a period of time
 * 
 * @param resource $ann Neural network resource.
 * @param string $filename The file containing train data
 * @param int $max_epochs The maximum number of epochs the training should continue
 * @param int $epochs_between_reports The number of epochs between calling a user function. A value of zero means that user function is not called.
 * @param float $desired_error The desired fann_get_MSE() or fann_get_bit_fail(), depending on the stop function  chosen by fann_set_train_stop_function()
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_train_on_file($ann, $filename, $max_epochs, $epochs_between_reports, $desired_error) {}

/**
 * Train one iteration with a set of inputs, and a set of desired outputs
 * 
 * @param resource $ann Neural network resource.
 * @param array $input An array of inputs. This array must be exactly fann_get_num_input() long.
 * @param array $desired_output An array of desired outputs. This array must be exactly fann_get_num_output() long.
 * 
 * @return bool Returns TRUE on success, or FALSE otherwise.
 */
function fann_train($ann, $input, $desired_output) {}


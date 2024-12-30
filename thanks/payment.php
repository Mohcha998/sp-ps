<?php

	function payment()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if($this->input->post('result_data') != null) {
            $data = $this->input->post('result_data');
            $this->finish($data);
        } else if($this->input->post('response') != null) {
            $data = $this->input->post('response');
            // dd($data);
            $this->finish($data);
        } else if($id != null) {
            $result = $this->check_status($id);
            $this->redirect($result);
            // $this->finish($result);
        } else {
            $transaction_status = isset($_GET['transaction_status']) ? $_GET['transaction_status'] : null;
            $status_code = isset($_GET['status_code']) ? $_GET['status_code'] : null;
            $order_id = isset($_GET['order_id']) ? $_GET['order_id'] : null;
            $array = array(
                'transaction_status' => $transaction_status,
                'status_code' => $status_code,
                'order_id' => $order_id
            );
            $encodedArray = json_encode($array);
            // $this->finish($encodedArray);
            $result = $this->check_status($order_id);
            // dd($result);
            $this->finish($result);
            // redirect(base_url() . 'thanks', 'refresh');
        }
    }
    
    function finish($data)
    {
        $result = json_decode($data, true);
        $transaction_status = isset($result['transaction_status']) ? $result['transaction_status'] : null;
        $status_code = isset($result['status_code']) ? $result['status_code'] : null;
        $order_id = isset($result['order_id']) ? $result['order_id'] : null;

        // dd($transaction_status);

        if($transaction_status == 'settlement' || $transaction_status == 'success' || $transaction_status == 'capture') {
            redirect(base_url() . 'thanks/settlement?transaction_status=' . $transaction_status . '&status_code=' . $status_code . '&order_id=' . $order_id , 'refresh');
        } else if($transaction_status == 'pending') {
            redirect(base_url() . 'thanks/?transaction_status=' . $transaction_status . '&status_code=' . $status_code . '&order_id=' . $order_id , 'refresh');
        } else {
            redirect(base_url() . 'thanks/error?transaction_status=' . $transaction_status . '&status_code=' . $status_code . '&order_id=' . $order_id , 'refresh');
        }
    
    }

    payment();
    
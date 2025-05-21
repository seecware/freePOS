<?php

class ClientsController {
    public function addNewClient() {
        $data = [
            'first_name' => $_POST['first_name'] ?? '',
            'last_name'  => $_POST['last_name'] ?? '',
            'phone'      => $_POST['phone'] ?? '',
            'email'      => $_POST['email'] ?? '',
        ];
        
        $_SESSION['new_client'] = $data;

        header("Location: /new-added-client");
        exit;
    }

    public function confirmation() {
        $client = $_SESSION["new_client"] ?? null;
        unset($_SESSION["new_client"]);

        if (!$client) {
            header("Location: /error");
            exit;
        }

        return view('new-added-client', [
            'title' => 'Done!',
            'client' => $client,
        ]);
    }
}

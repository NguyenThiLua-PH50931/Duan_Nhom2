<?php

class AccountsController
{
    public function listAccounts()
    {
        //Lấy danh sách tài khoản từ model
        $accounts = (new AccountsModels)->getAllAccount();
        view("admin/accounts/accounts-list", ['accounts' => $accounts]);
    }

    //Xóa tài khoản
    public function deleteAccounts()
    {
        $id_tk = $_GET['id_tk'];

        $accounts = (new AccountsModels)->getAccountsById($id_tk);
        (new AccountsModels)->delete($accounts['id_tk']);
        header('location: index.php?admin=list-accounts');
    }

}

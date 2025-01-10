public function update($id)
{
    $data = [
        'amount' => $this->request->getPost('amount'),
        'category' => $this->request->getPost('category'),
        'description' => $this->request->getPost('description'),
        'date' => $this->request->getPost('date'),
        'updated_at' => date('Y-m-d H:i:s')
    ];

    $expensesModel = new \App\Models\ExpensesModel();
    $expensesModel->update($id, $data);

    return redirect()->to('/expenses')->with('message', 'Pengeluaran berhasil diperbarui');
}

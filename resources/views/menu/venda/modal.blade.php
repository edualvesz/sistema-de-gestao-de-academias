<div class="modal fade modal-slide-in-right" id="modal-lgi" aria-hidden="true" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Faturar venda (Vai ser preciso um novo modal para venda parcelada no sistema)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="alert alert-info" role="alert">
                        Obrigatório o preenchimento dos campos com asterisco.
                    </div>
                    <div class="content">
                        <div class="form-group">
                            <label for="exampleInputEmail2">Descrição</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"><br>
                            <div class="row">
                                <div class="col-4">
                                    <label for="exampleInputEmail2">Valor*</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-2">
                                    <label for="exampleInputEmail2">Desconto</label>
                                    <select class="form-control">
                                        <option></option>  
                                        <option>5%</option>
                                        <option>10%</option>
                                        <option>15%</option>
                                        <option>20%</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail2">Data de vencimento*</label>
                                    <input type="date" class="form-control">
                                </div>
              <!-- /.card-body -->
                            </div><br>
                            <div class="row align-self-center">
                                <div class="col-sm-3">
                                    <label for="exampleInputEmail1">Quantidade de parcelas</label>
                                    <select class="form-control">
                                        <option></option>  
                                        <option>Pagamento à vista</option>
                                        <option>1x</option>
                                        <option>2x</option>
                                        <option>3x</option>
                                        <option>4x</option>
                                        <option>5x</option>
                                        <option>6x</option>
                                        <option>7x</option>
                                        <option>8x</option>
                                        <option>9x</option>
                                        <option>10x</option>
                                        <option>11x</option>
                                        <option>12x</option>
                                    </select><br>
                                </div>
                            </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Recebido?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info">Faturar</button>
                    </div>
                </div>
            <!-- /.modal-content -->
            </div>
        <!-- /.modal-dialog -->
        </div>
    </div>
</div>
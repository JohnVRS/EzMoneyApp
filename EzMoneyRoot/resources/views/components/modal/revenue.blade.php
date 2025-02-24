<!-- Estrutura do Modal -->
<div class="modal fade" id="revenueModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        
        <div class="modal-content">
            <div class="button-wrapper">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            
            <div class="header">
                <h5> Nova Receita</h3>
            </div>
            <div class="container-fluid">
                <div class="inputRow">
                    <label for="">Descrição</label>
                    <div class="groupField">
                        <input type="text" name="desc" id="input-modal-desc">
                    </div>
                
                 
                    <div class="row">
                        <div class="col-6">

                            <label for="">Valor</label>
                            <div class="groupField">
                                <input type="text" class="inputField">
                            </div>
                        </div>
                        
                        <div class="col-6">

                            <label for="">Data</label>
                            <div class="groupField">
                                <input type="date" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inputRow">
                
                    <div class="row">
                        <div class="col-6">

                            <label for="">Conta/Cartão</label>
                            <div class="groupField">
                                <select name="selectCard" id="selectCard">
                                    <option selected> Escolha o cartão...</option>
                                    <option value="Mercado Pago">Mercado Pago</option>
                                    <option value="Bradesco"> Bradesco</option>
                                    <option value="Nubank">Nubank</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">

                            <label for="" id="labelCategory">Categoria</label>
                            <div class="groupField">
                                <select name="selectCategory" id="selectCategory">
                                    <option selected> Buscar Categoria...</option>
                                    <option value="1">Alimentação</option>
                                    <option value="2"> Saúde</option>
                                    <option value="3">Familía</option>
                                    <option value="4">Lazer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="footer">
                <div class="button-wrapper">
                    <button class="btn">
                        <i class="bi bi-check-lg text-light"></i>
                    </button>
                </div>
                
            </div>
        </div>
    </div>
  </div>
<link href="../../assets/css/gaming/Addon.css" rel="stylesheet"/>

<div class="col-md-10 page-body">

    <div class="col-md-12 linha">
        <div class="col-md-2">MOD/Pack</div>
        <div class="col-md-10"><h3 class="label-obj">EBS - Asking for collaboration</h3></div>
    </div>

    <div class="col-md-12 linha">
        <div class="col-md-2">Localização</div>
        <div class="col-md-6">
            <select class="form-control">
                <option>Tag de localização na interface - PositionTag1</option>
            </select>
        </div>
    </div>

    <div class="col-md-12 linha">
        <div class="col-md-2">Descrição</div>
        <div class="col-md-8">
            <input type="text" class="form-control" />
        </div>
    </div>

    <div class="col-md-12 linha">
        <div class="col-md-2">Objeto(s)</div>
        <div class="col-md-8">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- ITEM ACORDEON -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Cultivando a Inovação
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">

                            <div class="col-md-12 linha">
                                <div class="col-md-2">Dica de Tela</div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>


                            <div class="col-md-12 linha">
                                <div class="col-md-2">Imagem</div>
                                <div class="col-md-10">
                                    <a href="#">clique aqui para importar outra imagem</a>
                                </div>
                            </div>

                            <div class="col-md-12 linha">
                                <div class="col-md-2">Vigência</div>
                                <div class="col-md-10">
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" />
                                    </div>
                                    <div class="col-md-1 text-center">
                                        a
                                    </div>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" />
                                    </div>
                                    <div class="col-md-1 text-center">
                                        das
                                    </div>
                                    <div class="col-md-2">
                                        <input type="hour" class="form-control" />
                                    </div>
                                    <div class="col-md-1 text-center">
                                        às
                                    </div>
                                    <div class="col-md-2">
                                        <input type="hour" class="form-control" />
                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-12 linha">
                                <div class="col-md-2">Instruções</div>
                                <div class="col-md-10">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 linha">
                                <div class="col-md-2">Regras</div>
                                <div class="col-md-10">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 linha">
                                <div class="col-md-2">Criador</div>
                                <div class="col-md-10">
                                    <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"> Limitar número de participações</div> 
                                    <div class="col-md-3"><input type="text" class="form-control"/></div>
                                    <div class="col-md-12">
                                        <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"> Aprovação obrigatória de conteúdo
                                    </div> 

                                    <div class="col-md-12">
                                        <br/>
                                        <div class="col-md-3"><input type="text" class="form-control"></div> 
                                        <div class="col-md-9">pontos pela criação<br/> <span class="auto-small">(estes pontos contarão no Score do Jogo)</span></div>
                                    </div> 

                                    <div class="col-md-9">
                                        <br/>
                                        <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"><span class="auto-small"> Reconhecimento por pontos</span></div> 
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Pontos"/></div>

                                        <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"><span class="auto-small"> Reconhecimento por Ranking</span></div> 
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Qtd."/></div>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <br/><br/>
                                        <p class="auto-small">A criação de um Reconhecimento é obrigatório.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 linha">
                                <div class="col-md-2">Formas de Interaçao</div>
                                <div class="col-md-10">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Pontos Participantes</th>
                                                <th>Pontos Criador</th>
                                                <th>Ativo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Apoios/ Votos</td>
                                                <td>Pontos Participantes</td>
                                                <td>Pontos Criador</td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="col-md-5"><input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"><span class="auto-small"> Limitar número de participações</span></div> 
                                    <div class="col-md-4">
                                        <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"><span class="auto-small"> Mais bem pontuados</span><Br/>
                                        <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"><span class="auto-small"> Todos</span>
                                    </div> 

                                    <div class="col-md-3 text-center">
                                        <input type="text" class="form-control-sm" placeholder="Qtd."/><span class="auto-small">acime de</span>
                                        <input type="text" class="form-control-sm" placeholder="Pontos"/>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 linha text-right">
                                <br />
                                <button class="btn btn-default">Criar Reconhecimento</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- FIM ITEM ACORDEON -->

                <!-- PLUS -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
                <!-- END PLUS  -->

            </div>
        </div>
    </div>

    <div class="col-md-12 linha text-right">
        <button class="btn btn-default">Cancelar</button>
        <button class="btn btn-default">Salvar e criar Ação</button>
        <br/><br/>
    </div>

</div>


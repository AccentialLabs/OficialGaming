<link href="../../assets/css/gaming/Addon.css" rel="stylesheet"/>

<div class="col-md-10 page-body">

    <div class="col-md-12 linha">
        <div class="col-md-2">MOD/Pack</div>
        <div class="col-md-10"><h3 class="label-obj">Skill and Competence Pack</h3></div>
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
                                Teste de Competência
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
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class='text-left'>Componentes</th>
                                            <th>Grupo</th>
                                            <th>Ativo</th>
                                            <th><input type="checkbox" /></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($componentes as $componente) { ?>
                                            <tr>
                                                <td class='text-left'><?php echo $componente['componente_desc']; ?></td>
                                                <td><?php echo $componente['grupo_desc']; ?></td>
                                                <td> <input type="checkbox"  checked='checked'/></td>
                                                <td><span class="glyphicon glyphicon-ban-circle"></span></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-12 linha">
                                <div class="col-md-4">
                                    <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"><span class="auto-small"> Limitar número de participações</span>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="col-md-1">
                                    vez(es)
                                </div>
                                <div class="col-md-5 text-right">
                                    <button class="btn btn-default btn-sm">Importar planilha</button>
                                </div>
                            </div>

                            <div class="col-md-12 linha">
                                <div class="col-md-2">Aprovação</div>
                                <div class="col-md-10">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-md-9">
                                        pontos<br/><span class="auto-small"> (estes pontos contarão no Score do jogo)</span>
                                    </div>

                                    <div class="col-md-12 linha">
                                        <div class="col-md-2">Mensagem</div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-12 linha">
                                        <div class="col-md-2">Certificado</div>
                                        <div class="col-md-10">
                                            <a href="#">clique aqui para selecionar/importar template de certificado</a>
                                        </div>
                                    </div>

                                    <div class="col-md-12 linha">
                                        <div class="col-md-2">Conteúdo destravado</div>
                                        <div class="col-md-10">
                                            <a href="#">clique aqui para selecionar/importar conteúdo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 linha">
                                <div class="col-md-2">Resultado</div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" />

                                    <div class="col-md-12">
                                        <br/>
                                        <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"> Sumariza por Grupo
                                    </div>
                                    <div class="col-md-12">
                                        <input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"> Permite comparação de performance do usuário/jogador com demais da mesma Equipe/Empresa
                                    </div>
                                    <div class="col-md-12">
                                        <br />
                                        <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"> <span class="auto-small">Mostrar gráfico de resumo/total</span></div>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>Selecione o tipo de gráfico</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <br/>
                                        <div class="col-md-6"><input type="checkbox" id="respdescritiva" name="tipo_resposta" value="DESCRITIVA"><span class="auto-small"> Mostrar gráfico comparativo de performance</span></div>
                                        <div class="col-md-6">
                                            <select class="form-control">
                                                <option>Selecione o tipo de gráfico</option>
                                            </select>
                                        </div>
                                        <br/><br/>
                                    </div>

                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Perfil</th>
                                                <th>Exportar Excel</th>
                                                <th>Imprimir</th>
                                                <th>Vizualizar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Administrador</td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                                <td><input type="checkbox" /></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
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

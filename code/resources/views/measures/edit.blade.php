<form class="form-horizontal" method="PUT" action="{{ url('measures/0') }}">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">
            Modifica Unità di Misura
        </h4>
    </div>

    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                @include('commons.manyrows', [
                    'contents' => $measures,
                    'show_columns' => true,
                    'columns' => [
                        [
                            'label' => 'ID',
                            'field' => 'id',
                            'type' => 'hidden'
                        ],
                        [
                            'label' => 'Nome',
                            'field' => 'name',
                            'type' => 'text'
                        ],
                        [
                            'label' => 'Unità Discreta',
                            'field' => 'discrete',
                            'help' => 'Le unità discrete non sono frazionabili: sui prodotti cui viene assegnata una unità di misura etichettata con questo attributo non sarà possibile attivare proprietà come "Prezzo Variabile" e "Pezzatura"',
                            'type' => 'bool',
                            'extra' => [
                                'valuefrom' => 'id'
                            ]
                        ]
                    ]
                ])
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annulla</button>
        <button type="submit" class="btn btn-success">Salva</button>
    </div>
</form>

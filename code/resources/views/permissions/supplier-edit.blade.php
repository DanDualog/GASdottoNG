<div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close reloader" data-dismiss="modal" data-reload-target="#user-list" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Configura Ruoli per {{ $supplier->printableName() }}</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    @foreach(App\Role::rolesByClass(get_class($supplier)) as $role)
                        <div class="row">
                            <h3>{{ $role->name }}</h3>
                        </div>

                        <div class="row">
                            @include('commons.completionrows', [
                                'objects' => $role->usersByTarget($supplier),
                                'source' => 'userBlood',
                                'adding_label' => 'Aggiungi Nuovo Utente',
                                'add_callback' => 'supplierAttachUser',
                                'remove_callback' => 'supplierDetachUser',
                                'extras' => [
                                    'supplier-id' => $supplier->id,
                                    'role-id' => $role->id
                                ]
                            ])
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default reloader" data-dismiss="modal" data-reload-target="#supplier-list">Chiudi</button>
            </div>
        </div>
    </div>
</div>
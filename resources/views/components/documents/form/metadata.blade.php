<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
        @if (!$hideContact)
        <div class="row">
            <x-select-contact-card 
                type="{{ $contactType }}"
                :contact="$contact"
                :contacts="$contacts"
                :search_route="$contactSearchRoute"
                :create_route="$contactCreateRoute"
                :text-add-contact="$textAddContact"
                :text-create-new-contact="$textCreateNewContact"
                :text-edit-contact="$textEditContact"
                :text-contact-info="$textContactInfo"
                :text-choose-different-contact="$textChooseDifferentContact"
            />
        </div>
        @endif
    </div>

    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
        <div class="row">
            @if (!$hideIssuedAt)
            {{ Form::dateGroup('issued_at', trans($textIssuedAt), 'calendar', ['id' => 'issued_at', 'class' => 'form-control datepicker', 'required' => 'required', 'date-format' => 'Y-m-d', 'autocomplete' => 'off'], $issuedAt) }}
            @endif

            @if (!$hideDocumentNumber)
            {{ Form::textGroup('document_number', trans($textDocumentNumber), 'file', ['required' => 'required'], $documentNumber) }}
            @endif

            @if (!$hideDueAt)
            {{ Form::dateGroup('due_at', trans($textDueAt), 'calendar', ['id' => 'due_at', 'class' => 'form-control datepicker', 'required' => 'required', 'date-format' => 'Y-m-d', 'autocomplete' => 'off'], $dueAt) }}
            @endif

            @if (!$hideOrderNumber)
            {{ Form::textGroup('order_number', trans($textOrderNumber), 'shopping-cart', [], $orderNumber) }}
            @endif
        </div>
    </div>
</div>

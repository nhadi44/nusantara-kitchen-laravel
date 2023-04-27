<div class="modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-labelledby="{{ $modalId }}Label"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog {{ $modalSize }}" role="document">
        <div class="modal-content">
            <div class="modal-header {{ $modalBg }}">
                <h5 class="modal-title" id="{{ $modalId }}Label">{{ $modalTitle }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <x-feathericon-x class="w-6 h-6" />
                </button>
            </div>
            <form id="{{ $formId }}">
                <div class="modal-body">
                    {{ $modalBody }}
                </div>
                <div class="modal-footer">
                    {{ $modalFooter }}
                </div>
            </form>
        </div>
    </div>
</div>

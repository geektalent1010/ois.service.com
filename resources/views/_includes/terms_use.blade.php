<div class="modal terms-modal policy-modal">
    <div class="modal-section">
        <div class="modal-header">
            <div class="close-but">
                <a class="d-flex align-items-center" onclick="toggleTerms()">
                    <img class="close-icon" src="{{ asset('images/Logo/IconCLOSE.svg') }}" alt="" />
                </a>
            </div>
        </div>
        <div class="modal-content">
            {!!$data!!}
        </div>
    </div>
</div>

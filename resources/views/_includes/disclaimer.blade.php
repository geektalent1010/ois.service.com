<div class="modal policy-modal disclaimer-modal">
    <div class="modal-section">
        <div class="modal-header">
            <div class="close-but">
                <a class="d-flex align-items-center" onclick="toggleDisclaimer()">
                    <img class="close-icon" src="{{ asset('images/Logo/IconCLOSE.svg') }}" alt="" />
                </a>
            </div>
        </div>
        <div class="modal-content">
            {!!$data!!}
        </div>
    </div>
</div>

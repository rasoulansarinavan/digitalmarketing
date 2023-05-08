<div class="modal fade" id="exampleModalSmall" tabindex="-1" wire:ignore.self
     aria-labelledby="exampleModalSmallTitle"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalSmallTitle">
                    {{@$title}}</h5>
                <button type="button" class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="slimScrollDiv"
                 style="position: relative; overflow: hidden; width: auto; height: 95%;">
                <div class="modal-body"
                     style="overflow: hidden; width: auto; height: 95%;">
                    <p>
                        {{@$description}}
                    </p>
                </div>
                <div class="slimScrollBar"
                     style="background: rgb(214, 219, 230); width: 5px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 0px; z-index: 99; left: 1px; height: 156.49px;"></div>
                <div class="slimScrollRail"
                     style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(214, 219, 230); opacity: 0.2; z-index: 90; left: 1px;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">متوجه شدم !
                </button>
            </div>
        </div>
    </div>
</div>

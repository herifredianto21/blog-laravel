<div>
    <form method="POST" wire:submit.prevent='updateBlogSocialMedia()'>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Facebook</label>
                    <input type="text" class="form-control" placeholder="Facebookpage URL" wire:model='facebook_url'>
                    <span class="text-danger">@error('facebook_url')
                        {{$message}}
                    @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Instagram</label>
                    <input type="text" class="form-control" placeholder="Instagram URL" wire:model='instagram_url'>
                    <span class="text-danger">@error('instagram_url')
                        {{$message}}
                    @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Youtube</label>
                    <input type="text" class="form-control" placeholder="Youtube channel URL" wire:model='youtube_url'>
                    <span class="text-danger">@error('youtube_url')
                        {{$message}}
                    @enderror</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">LinkediIn</label>
                    <input type="text" class="form-control" placeholder="LinkedIn URL" wire:model='linkedin_url'>
                    <span class="text-danger">@error('linkedin_url')
                        {{$message}}
                    @enderror</span>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</div>

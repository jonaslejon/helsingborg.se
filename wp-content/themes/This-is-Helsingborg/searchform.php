<form class="search" method="get" role="search" action="/">
    <div class="form-container">
        <label class="search-label search-label-alt">Sök på Helsingborg.se</label>
        <div class="input-group">
            <div class="form-element">
                <input <?php if (is_front_page()) echo 'data-autocomplete="pages"'; ?> autocomplete="off" class="form-control" type="search" name="s" placeholder="Vad letar du efter?" value="<?php echo (isset($_GET['s']) && strlen($_GET['s']) > 0) ? urldecode($_GET['s']) : ''; ?>">
                <?php if (is_front_page()) : ?>
                    <div class="hbg-loading hbg-loading-sm"></div>
                    <ul class="autocomplete"></ul>
                <?php endif; ?>
            </div>
            <div class="form-element">
                <button class="form-control btn btn-submit" type="submit"><i class="fa fa-search"></i>Sök</button>
            </div>
        </div>
    </div>
</form>
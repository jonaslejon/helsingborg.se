<?php echo $before_widget; ?>
<div class="box box-filled help-container">
    <div class="question">
        <strong><?php echo $instance['question']; ?></strong>
        <?php if (isset($instance['sub-question'])) : ?><span><?php echo $instance['sub-question']; ?></span><?php else : ?><span>Hjälp oss att göra Helsingborg.se bättre.</span><?php endif; ?>
    </div>
    <div class="answers">
        <div class="inline-block relative">
            <button class="btn btn-transparent-dark-x3" value="yes" data-action="hbg-help-submit-response">Ja</button>
        </div>
        <div class="inline-block relative" data-tooltip="click">
            <button class="btn btn-transparent-dark-x3" value="no" data-action="hbg-help-submit-response" data-tooltip-toggle>Nej</button>
            <div class="tooltip tooltip-creamy-large tooltip-form" style="top: 40px;">
                <form method="post" action="" class="hbg-help-form">
                    <label for="input-comment" class="form-label"><?php echo $instance['question_feedback']; ?></label>
                    <textarea name="comment" id="input-comment" class="form-control"></textarea>
                    <input type="hidden" id="input-post-id" value="<?php echo get_the_ID(); ?>">
                    <button style="margin-top:5px;" type="submit" class="btn btn-submit">Skicka</button>
                </form>
            </div>
        </div>
    </div>
    <div class="thanks">
        Tack för ditt svar!
    </div>
</div>
<?php echo $after_widget; ?>
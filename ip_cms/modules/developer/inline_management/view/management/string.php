<<?php echo $tag ?> class="ipModuleInlineManagementString <?php echo $cssClass ?> <?php echo str_replace(' ', '',$value) == '' ? 'ipmEmpty' : '' ?>" data-cssclass='<?php echo $this->esc($cssClass) ?>' data-key='<?php echo $this->esc($key) ?>' data-htmltag='<?php echo $this->esc($tag) ?>' data-defaultvalue='<?php echo $this->esc($defaultValue) ?>'>
    <?php echo nl2br($this->esc($value)) ?>
</<?php echo $tag ?>>

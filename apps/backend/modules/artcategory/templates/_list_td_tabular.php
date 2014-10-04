<?php use_stylesheet('nested-set.css') ?>
<td class="sf_admin_text sf_admin_list_td_name nested_set">
  <span class="<?php echo $artcategory->getNode()->isLeaf() ? 'leaf' : 'node' ?>" style="<?php echo 'margin-left: ' . ($artcategory['level'] * 1.3) . 'em' ?>">
    <?php echo link_to($artcategory->getName(), 'artcategory_edit', $artcategory) ?>
  </span>
</td>
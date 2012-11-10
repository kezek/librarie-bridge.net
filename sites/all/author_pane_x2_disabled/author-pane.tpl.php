<?php
// $Id: author-pane.tpl.php,v 1.1.2.13.2.8 2010/08/10 01:49:22 michellec Exp $

/**
 * @file
 * Theme implementation to display information about the post author.
 *
 * Available variables (core modules):
 * - $account: The entire user object for the author.
 * - $picture: Themed user picture for the author. See author-pane-user-picture.tpl.php.
 * - $account_name: Themed user name for the author.
 * - $account_id: User ID number for the author.
 *
 * - $joined: Date the post author joined the site. (Uses shortdate format)
 * - $joined_ago: Time since the author registered in the format "TIME ago"
 *
 * - $online_status_class: "author-offline" or "author-online".
 * - $online_status: Translated text "Online" or "Offline"
 * - $last_active: Time since author was last active. eg: "5 days 3 hours"
 *
 * - $contact: Linked translated text "Contact user".
 *
 * - $profile - Profile object from core profile.
 *     Usage: $profile['category']['field_name']['#value']
 *     Example: <?php print $profile['Personal info']['profile_name']['#value']; ?>
 *
 * Available variables (contributed modules):
 * - $facebook_status: Status, including username, from the facebook status module.
 * - $facebook_status_status: Status from the facebook status module.
 *
 * - $privatemsg: Linked translated text "Send private message".
 *
 * - $user_badges: Badges from user badges module.
 *
 * - $userpoints_points: Author's total number of points from all categories.
 * - $userpoints_categories: Array holding each category and the points for that category.
 *
 * - $user_stats_posts: Number of posts from user stats module.
 * - $user_stats_ip: IP address from user stats module.
 *
 * - $user_title: Title from user titles module.
 * - $user_title_image: Image version of title from user titles module. This is
     not shown by default. If you want to show images instead of titles, change
     all instances of the variable in the code below.

 * - $og_groups: Linked list of OG groups author is a member of.

 * - $location_user_location: User location as reported by the location module.

 * - $fasttoggle_block_author: Link to toggle the author blocked/unblocked.

 * - $troll_ban_author: Link to ban author via the Troll module.
 
 * Not working as of this writing but kept for future compatability:
 * - $user_relationships_api: Linked text "Add to <relationship>" or "Remove from <relationship>".
 * - $flag_friend: Linked text. Actual text depends on module settings.
 
 */
?>

<?php
  // This bit of debugging info will show the full path to and name of this
  // template file to make it easier to figure out which template is
  // controlling which author pane.
  if (!empty($show_template_location)) {
    print __FILE__;
  }
?>

<div class="author-pane">
 <div class="author-pane-inner">
    <?php /* General section */ ?>
    <div class="author-pane-section author-pane-general">
      <?php /* Account name */ ?>
      <div class="author-pane-line author-name">
        <?php print $account_name; ?>
      </div>

      <?php /* Avatar (has div in variable) */ ?>
      <?php if (!empty($picture)): ?>
        <?php print $picture; ?>
      <?php endif; ?>

      <?php /* Online status */ ?>
      <?php if (!empty($online_status)): ?>
        <div class="author-pane-line <?php print $online_status_class ?>">
           <?php print $online_status; ?>
        </div>
      <?php endif; ?>

      <?php /* User title */ ?>
      <?php if (!empty($user_title)): ?>
        <div class="author-pane-line author-title">
          <?php print $user_title; ?>
        </div>
      <?php endif; ?>

      <?php /* User badges */ ?>
      <?php if (!empty($user_badges)): ?>
        <div class="author-pane-line author-badges">
          <?php print $user_badges; ?>
        </div>
      <?php endif; ?>

      <?php /* Location */ ?>
      <?php if (!empty($location_user_location)): ?>
        <div class="author-pane-line author-location">
          <?php print $location_user_location;  ?>
        </div>
      <?php endif; ?>

      <?php /* Joined */ ?>
      <?php if (!empty($joined)): ?>
        <div class="author-pane-line author-joined">
          <span class="author-pane-label"><?php print t('Joined'); ?>:</span> <?php print $joined; ?>
        </div>
      <?php endif; ?>

      <?php /* Posts */ ?>
      <?php if (isset($user_stats_posts)): ?>
        <div class="author-pane-line author-posts">
          <span class="author-pane-label"><?php print t('Posts'); ?>:</span> <?php print $user_stats_posts; ?>
        </div>
      <?php endif; ?>

      <?php /* Points */ ?>
      <?php if (isset($userpoints_points)): ?>
        <div class="author-pane-line author-points">
          <span class="author-pane-label"><?php print t('!Points', userpoints_translation()); ?></span>: <?php print $userpoints_points; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php /* Contact section */ ?>
    <div class="author-pane-section author-pane-contact">
      <?php /* Contact / Email */ ?>
      <?php if (!empty($contact)): ?>
        <div class="author-pane-line author-contact">
          <?php print $contact; ?>
        </div>
      <?php endif; ?>

      <?php /* Private message */ ?>
      <?php if (!empty($privatemsg)): ?>
        <div class="author-pane-line author-privatemsg">
          <?php print $privatemsg; ?>
        </div>
      <?php endif; ?>

      <?php /* User relationships */ ?>
      <?php if (!empty($user_relationships_api)): ?>
        <div class="author-pane-line author-user-relationship">
          <?php print $user_relationships_api; ?>
        </div>
      <?php endif; ?>

      <?php /* Flag friend */ ?>
      <?php if (!empty($flag_friend)): ?>
        <div class="author-pane-line">
          <?php print $flag_friend; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php /* Admin section */ ?>
    <div class="author-pane-section author-pane-admin">
      <?php /* IP */ ?>
      <?php if (!empty($user_stats_ip)): ?>
        <div class="author-pane-line author-ip">
          <span class="author-pane-label"><?php print t('IP'); ?>:</span> <?php print $user_stats_ip; ?>
        </div>
      <?php endif; ?>

     <?php /* Fasttoggle block */ ?>
     <?php if (!empty($fasttoggle_block_author)): ?>
        <div class="author-fasttoggle-block"><?php print $fasttoggle_block_author; ?></div>
      <?php endif; ?>

     <?php /* Troll ban */ ?>
      <?php if (!empty($troll_ban_author)): ?>
        <div class="author-pane-line author-troll-ban"><?php print $troll_ban_author; ?></div>
      <?php endif; ?>
    </div>
  </div>
</div>

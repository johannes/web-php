<?
require("shared.inc");
commonHeader("Using CVS for PHP Development");
?>
<h3>Using CVS for PHP Development</h3>

<? if(!$fullname): ?>
All PHP development is done through a distributed revision control system called
CVS.  This helps us track changes and it makes it possible for people located
in all corners of the world to collaborate on a project without having to worry
about stepping on each others' toes.
<P>
Please note that you do not need a CVS account to access the CVS tree.  See
<a href="http://cvs.php.net">cvs.php.net</a> for details.  You only need your
own CVS account if you plan on committing things to the CVS tree.
<P>
The first thing you need to do is to get a CVS account.  If you are not
previously known to the PHP Development Team, then this is not an automatic
process.  Your best bet is to send mail to <a href="mailto: group@php.net">
group@php.net</a> and explain what you have in mind and perhaps give a bit of
background on yourself.<P>

If, you have already established yourself in the above manner you can submit
a CVS account request here: (only the encrypted version of the password is sent)
In the purpose field, put a couple of words describing what you want to work on.
This is mostly to jog my memory and allow me to match the account request with 
whatever previous correspondence that may taken place.
<form action="cvs-php3.php" method="POST">
<table>
<tr><th>Full Name: </th><td><input type=text size=50 name=fullname></td></tr>
<tr><th>Email: </th><td><input type=text size=50 name=email></td></tr>
<tr><th>Purpose: </th><td><input type=text size=50 name=purpose></th></tr>
<tr><th>User ID: </th><td><input type=text size=10 name=id></th></tr>
<tr><th>Requested Password: </th><td><input type=password size=10 name=password></th></tr>
<tr><th>&nbsp;</th><td><input type=submit value="Send It"></td></tr>
</table>
</form>
<? else:
mail("rasmus@lerdorf.on.ca","CVS Account Request","Full name: $fullname\nEmail: $email\nID: $id\nPassword: ".crypt($password)."\nPurpose: $purpose");
?>
Thank you.  Your request has been sent.
<?endif;?>
<P>
The CVS account, once activated, gives you access to a number of things.  First, and most important it gives you access
to modify the PHP CVS tree.  It also allows you to comment on and close bugs in the PHP bugs interface
as well as modifying the documentation notes in the annotated manual.  The relevant links for these
three things are:
<ul>
<li><a href="http://cvs.php.net">CVS Web Interface for 3.0 Tree</a>
<li><a href="http://bugs.php.net">PHP Bugs Database</a>
<li><a href="http://www.php.net/manual/admin-notes.php3">Manual Errata Administration</a>
</ul>

If you are not familiar with CVS, you should have a look at the various documentation resources available
at <a href="http://www.cyclic.com">www.cyclic.com</a>.  This is also where to get the most recent version
of the CVS client.<P>

All CVS commit messages get sent to the php-dev mailing list.  You should subscribe yourself to this mailing
list.  Instructions for subscribing are on the <a href="/support.php">Support</a> page.
<P>
CVS itself is quite easy to use.  Follow the steps listed on the <a href="http://cvs.php.net">CVS Web Interface</a>
page for checking out your tree.  Substitute your own user name and password for the cvsread/phpfi combination listed there.
You will not be able to do this until you receive confirmation of your account having been created though.
<P>
Next, once you have your CVS tree you need to know the following commands.  They should all be executed from within
the checked out tree.  eg. cd php3
<dl>
<dt><b><tt>cvs update -dP</tt></b>
<dd>This fetches all updates made by others and brings your tree up to date.  Before starting to edit anything
in the tree you should do this.  Generally you would do this whenever you see a CVS commit message on the php-dev
mailing list.

<dt><b><tt>cvs commit</tt></b>
<dd>This commits any changes you have made anywhere in the tree.  A text editor will pop up and you will need to
describe the changes you made.  Please provide a good description here as it may help people in the future when
looking at your code changes.
</dl>
<P>
It would probably be a good idea to put the following in your ~/.cvsrc file:
<pre>diff -u
cvs -z4
update -d -P
checkout -P</pre>
<P>Your CVS account also translates into a foo@php.net email address where <b>foo</b> is your CVS user id.
<? commonFooter(); ?>

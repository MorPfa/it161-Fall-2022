<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Vollstandiger Name" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email " title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        Wie haben sie von uns gehort?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Optionen</option>
            <option value="Phone">Telefon</option>
            <option value="Web">Internet</option>
            <option value="Magazine">Magazin</option>
            <option value="A Friend">Freunde</option>
            <option value="Other">Andere</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>Woran sind sie interessiert?</legend>
        <input type="checkbox" name="Interested_In[]" value="Local tour" tabindex="40" /> Regionale Tour <br />
        <input type="checkbox" name="Interested_In[]" value="Neighboring country tour" /> Tour in eines der Nachbarlander <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
        <input type="checkbox" name="Interested_In[]" value="Accessiblity" /> Behinderungen/ Barrierefreiheit <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Etwas anderes <br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>Wurden sie gerne unseren Newsletter abonnieren?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Ja <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> Nein <br />
    </fieldset>
</div>
<div>	
    <label>
        Kommentare:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Ihre Kommentare sind uns wichtig!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->


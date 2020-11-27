<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Public Drone Perceptions</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build/Initial WebGL Test.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $valid = true;
        $name

        
        if (empty($_POST["age"])) {
          $ageErr = "You must confirm you are of age to participate in this study.";
          $valid = false;
        } elseif ($_POST["age"] != "yes") {
          $ageErr = "You must confirm you are of age to participate in this study.";
          $valid = false;
        }
        
        if (empty($_POST["read"])) {
          $readErr = "You must confirm you have read and undersood the information above.";
          $valid = false;
        } elseif ($_POST["read"] != "yes") {
          $readErr = "You must confirm you have read and undersood the information above.";
          $valid = false;
        }
          
        if (empty($_POST["participate"])) {
          $partErr = "You must confirm your willingness to participate in this experience.";
          $valid = false;
        } elseif ($_POST["participate"] != "yes") {
          $partErr = "You must confirm your willingness to participate in this experience.";
          $valid = false;

        }

        if ($valid) {
          echo "Success"
        }

      }
    ?>
    <div class="headder">
      <p>Carnegie Mellon University</p>
    </div>
    <div class="title">
      <h1></h1>
    </div>
    <div class="consent">
      <div class="disclaimer">
        <p>This experiment is part of a research study conducted by Kimberly Huang at Carnegie Mellon University and is funded by CMU’s Institute for Politics and Strategy.</p>
        <h4>Summary</h4>
        <p>This study is to test the role that responsibility has to play when evaluating drone strikes. Namely, if there are lives at stake, how may it affect the decisions that people make. These responsibilities are what elite decision makers have to shoulder every day. This study attempts to dissect how this responsibility is translated to the general public. Participants will be exposed to drone strike scenarios and responsibilities and expected to react to them. These scenarios will contain images and information on the strikes which contain some level of violence.</p>
        <h4>Purpose</h4>
        <p>The purpose of the study is to evaluate why there is a decision making gap between the public and the political elite in the United States. While the public has often been more wary of using military force against enemies, members of the U.S. government across the aisle have generally agreed on more proactive use of the military. This gap is blatant in the case of drone strikes, where there is much more support for them in the government than in the public. While this topic has been studied extensively,  the role of responsibility and experience has been understudied. Ultimately, this research is important in understanding why the decision making gap persists even now and what steps should be taken to bridge it.</p>
        <h4>Procedures</h4>
        <p>Upon entry, you will receive a number that you will be expected to use through the three parts of the study. The study has three major components. First, you will take a survey that asks for demographic information, as well as information on your foreign policy preferences. After the survey, you will be asked to play a game, where you will evaluate five different military scenarios. In each scenario, you will be given information about a military target to the United States. You will then be asked to make a decision on what kind of military action you would like to take against the target. Once the choice has been made, you will receive information on the aftermath of your decision. After the game, you will take one more survey that evaluates your experience in the game, as well as asks additional questions on U.S. foreign policy. The expected duration of the study is 30 minutes.</p>
        <h4>Participant Requirements</h4>
        <p>Participation in this study is limited to individuals age 18 and older that are residents of the United States.</p>
        <h4>Risks</h4>
        <p>This study will expose you to the risks and discomfort that may be associated with war, violence, and military strikes. Besides those risks, the risks and discomfort associated with participation in this study are no greater than those ordinarily encountered in daily life.</p>
        <h4>Benefits</h4>
        <p>There may be no personal benefit from your participation in the study but the knowledge received may be of value to humanity.</p>
        <h4>Compensation & Costs</h4>
        <p>If you are an Amazon MTurk user, you will receive $2.50 in compensation for participation in this study if the study is conducted to completion. If you do not finish the study, you will not be eligible for compensation.<br>
        There will be no cost to you if you participate in this study.</p>
        <h4>Future Use of Information and/or Bio-Specimens</h4>
        <p>In the future, once we have removed all identifiable information from your data (information or bio-specimens), we may use the data for our future research studies, or we may distribute the data to other researchers for their research studies.  We would do this without getting additional informed consent from you (or your legally authorized representative).  Sharing of data with other researchers will only be done in such a manner that you will not be identified.</p>
        <h4>Confidentiality</h4>
        <p>The data captured for the research does not include any personally identifiable information about you.  Your IP address will not be captured.<br>
        By participating in the study, you understand and agree that Carnegie Mellon may be required to disclose your consent form, data and other personally identifiable information as required by law, regulation, subpoena or court order.  Otherwise, your confidentiality will be maintained in the following manner:<br>
        Your data and consent form will be kept separate. Your research data will be stored in a secure location on Carnegie Mellon property.  By participating, you understand and agree that the data and information gathered during this study may be used by Carnegie Mellon and published and/or disclosed by Carnegie Mellon to others outside of Carnegie Mellon.  However, your name, address, contact information and other direct personal identifiers will not be mentioned in any such publication or dissemination of the research data and/or results by Carnegie Mellon.  Note that per regulation all research data must be kept for a minimum of 3 years.<br>
        The researchers will take the following steps to protect participants’ identities during this study: (1) Each participant will be assigned a number to be used for each component of the study; (2) The researchers will record any data collected during the study by number, not by name; (3) Any data files will be stored in a secured location accessed only by authorized researchers.</p>
        <h4>Right to Ask Questions & Contact Information</h4>
        <p>If you have any questions about this study, you should feel free to ask them by contacting the Principal Investigator now at Kimberly Huang, kmhuang@andrew.cmu.edu.  If you have questions later, desire additional information, or wish to withdraw your participation please contact the Principal Investigator by e-mail in accordance with the contact information listed above.<br>
        If you have questions pertaining to your rights as a research participant; or to report concerns to this study, you should contact the Office of Research integrity and Compliance at Carnegie Mellon University.  Email: <a mailto="irb-review@andrew.cmu.edu">irb-review@andrew.cmu.edu</a>. Phone: 412-268-1901 or 412-268-5460.</p>
        <h4>Voluntary Participation</h4>
        <p>Your participation in this research is voluntary.  You may discontinue participation at any time during the research activity.  You may print a copy of this consent form for your records.</p>
      </div>
      <div class="response">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          I am age 18 or older.
          <input type="radio" name="age" <?php if (isset($age) && $age=="yes") echo "checked";?> value="yes"> Yes
          <input type="radio" name="age" <?php if (isset($age) && $age=="no") echo "checked";?> value="no"> No 
          <span class="error"><?php echo $ageErr;?></span>
          <br><br>
          I have read and understand the information above.
          <input type="radio" name="read" <?php if (isset($read) && $read=="yes") echo "checked";?> value="yes"> Yes
          <input type="radio" name="read" <?php if (isset($read) && $read=="no") echo "checked";?> value="no"> No 
          <span class="error"><?php echo $readErr;?></span>
          <br><br>
          I want to participate in this research and continue with the survey game.
          <input type="radio" name="participate" <?php if (isset($participate) && $participate=="yes") echo "checked";?> value="yes"> Yes
          <input type="radio" name="participate" <?php if (isset($participate) && $participate=="no") echo "checked";?> value="no"> No 
          <span class="error"><?php echo $partErr;?></span>
          <br><br>
          <input type="submit">
        </form>
      </div>
      <div class="identifier">
        
      </div>
    </div>
      
      <div class="footer">
        <div class="webgl-logo"></div>  
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">Boardroom</div>
      </div>
    </div>
  </body>
</html>

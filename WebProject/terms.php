
<?php
session_start();
include("server.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mystic Dawn</title>
        <link rel="icon" href="pics/logo.png">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <header>
            <div class="custom-left"><img src="pics/logo.png"/></div>
            <nav>
                <br/>
                <ul>
                    <li><a href="home.php"><i class="fa fa-home">Home</i></a></li>
                    <?php include("categories.php"); ?>
                    <li><a href="contact.php"><i class="fa fa-envelope">Contact Us</i></a></li>
                    <li><a href="login.php"><i class="fa fa-check">Profile</i></a></li>
                    <li><a href="register.php"><i class="fa fa-user">Register</i></a></li>
                    <div class="custom-right"><form name="s" method="post" action="search.php">
                        <input type="search" placeholder="Search for a product" id="search" name="search"><button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
            </nav>
        </header>
        <br/><br/><br/><br/><br/><br/>
        <h1 class="color-white" align="center">Mystic Dawn Account Terms Of Use</h1>
        <div class="terms"><p align="center">By registering for an Mystic Dawn Account, you are indicating that you have read, understand, and agree to be bound by these TERMS OF USE and acknowledge that you are subject to its terms and all other agreements, including the Mystic Dawn Privacy Policy, in connection with Mystic Dawn Account. If you do not agree to and accept these TERMS OF USE, do not register for an Mystic Dawn Account.<br/>
            
            Mystic Dawn may, at its sole discretion, change these TERMS OF USE which shall be effective immediately for all users who register for an account after such change is posted.
        </p></div>

        <h2 class="color-white" align="center">MEMBER ACCOUNT, PASSWORD, AND SECURITY</h2>
        <div class="terms"><p align="center">If you don't already have an Mystic Dawn Account login ID and password, you will be prompted to complete the Mystic Dawn Account registration process. You agree Mystic Dawn provides you only with the right to access your account in accordance with these TERMS OF USE and any applicable rules. If you violate these TERMS OF USE, or otherwise cannot validate your account to Mystic Dawn, you acknowledge and agree that your account may be permanently inaccessible to you and that all data or services associated with the account may not be retrievable. Mystic Dawn does not guarantee that you will have permanent access to your data or services used with your Mystic Dawn Account, or that it will provide copies to you in the event data is deleted or lost. Mystic Dawn encourages you to properly back up your data. Mystic Dawn may also impose limits on certain features and Account Services (defined below) or restrict your access to parts or all of the Account Services or other Mystic Dawn services or web sites without notice or liability.   
        </p></div>

        <h2 class="color-white" align="center">RESTRICTIONS ON USE</h2>
        <div class="terms">
                <p>Obtain or attempt to obtain unauthorized access to the Mystic Dawn Account;</p>
                <p>Use the Mystic Dawn Account in any unlawful manner, for any unlawful purpose, or in any manner inconsistent with these TERMS OF USE; or</p>
                <p>Sell, lease, loan, distribute, transfer, sublicense, reproduce, duplicate, copy, trade or exploit the Mystic Dawn Account or access thereto or derive income from the use or provision of the Mystic Dawn Account, whether for direct commercial or monetary gain or otherwise, without Mystic Dawn's prior, express and written permission.</p>
            <br/>

            <p>Except as provided in the Mystic Dawn Privacy Policy and these TERMS OF USE, You understand that Mystic Dawn is not responsible for the security or privacy of communications sent via your Mystic Dawn Account.<br/><br/>

                Any required or optional equipment or third party plug-in applications that you use to access your Mystic Dawn Account, including your computer, mobile or other device is subject to the terms, conditions, warranties and disclaimers provided by the manufacturer of such computer or other device, and Mystic Dawn makes no warranties or representations whatsoever regarding such computer or other device. Please refer to the materials you received when you purchased the computer or other device to understand your rights and obligations, including what warranties and disclaimers apply to you.
            </p>
        </div>

        <h2 class="color-white" align="center">ACCOUNT SERVICES</h2>
        <div class="terms"><p>From your Mystic Dawn Account, You may have access to certain software, services and/or content from Mystic Dawn or third parties (“Account Services”). Use of the Account Services may require you to accept additional terms and conditions and may be subject to additional fees. Such Account Services may not be available in all languages or in all countries and availability may change from time to time. Mystic Dawn does not endorse or assume any responsibility for any third-party Account Services, information, materials, products, or services. If you access a third party website from your Mystic Dawn Account, you do so at your own risk, and you understand that these TERMS OF USE and Mystic Dawn’s Privacy Policy do not necessarily apply to your use of such sites. You expressly release, indemnify, and hold Mystic Dawn harmless from any and all liability arising from your use of any third-party Account Services, website, or other associated materials. THIRD PARTY ACCOUNT SERVICES ARE OWNED OR OPERATED BY THIRD PARTIES THAT MAY NOT BE RELATED TO WITH OR SPONSORED BY Mystic Dawn AND MAY NOT BE AUTHORIZED FOR USE WITH YOUR Mystic Dawn ACCOUNT IN ALL COUNTRIES. USE OF THIRD PARTY ACCOUNT SERVICES IS AT YOUR OWN OPTION AND RISK.

        </p></div>

        <h2 class="color-white" align="center">DISCLAIMER OF WARRANTIES</h2>
        <div class="terms"><p>

            YOUR Mystic Dawn ACCOUNT IS PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, YOUR Mystic Dawn ACCOUNT IS PROVIDED WITHOUT WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, OR NON-INFRINGEMENT.<br/><br/>
            
            WITHOUT LIMITING THE FOREGOING, Mystic Dawn, ITS SUBSIDIARIES, ITS AFFILIATES, AND ITS LICENSORS DO NOT WARRANT THAT YOUR Mystic Dawn ACCOUNT IS OR WILL BE ABSOLUTELY RELIABLE, SECURE OR ERROR-FREE; THAT YOUR Mystic Dawn ACCOUNT WILL BE AVAILABLE AT ANY PARTICULAR TIME OR LOCATION, UNINTERRUPTED OR SECURE; OR THAT ANY DEFECTS OR ERRORS WILL BE CORRECTED. ANY CONTENT DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF YOUR Mystic Dawn ACCOUNT ARE DOWNLOADED AT YOUR OWN RISK AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER OR DEVICE OR NETWORK OR LOSS OF DATA THAT RESULTS FROM YOUR USE OF YOUR Mystic Dawn ACCOUNT.
            <br/><br/>
            SOME STATES AND REGIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES, SO THE ABOVE EXCLUSIONS MAY NOT APPLY TO YOU. THESE TERMS OF USE GIVES YOU SPECIFIC LEGAL RIGHTS, AND YOU MAY ALSO HAVE OTHER RIGHTS WHICH VARY FROM REGION TO REGION. THE DISCLAIMERS AND EXCLUSIONS UNDER THESE TERMS OF USE WILL NOT APPLY TO THE EXTENT PROHIBITED BY APPLICABLE LAW.
            </p></div>

        <h2 class="color-white" align="center">GENERAL</h2>
        <div class="terms"><p>These TERMS OF USE, and any rights granted hereunder, may not be transferred or assigned by you, but may be assigned by Mystic Dawn without restriction. Any attempted transfer or assignment in violation hereof shall be null and void. Mystic Dawn reserves the right to revoke your Mystic Dawn Account privileges at any time for any reason.
            <br/><br/>
            If Mystic Dawn needs to contact you about your Mystic Dawn Account, you consent to receive the notices by email. You agree that any such notices that we send you electronically will satisfy any legal communication requirements. Mystic Dawn is free to use any comments, information, ideas, concepts, reviews, or techniques or any other material contained in any communication you may send to us ("Feedback"), including responses to questionnaires or through postings through your Mystic Dawn Account, including the Mystic Dawn website and user interfaces, without further compensation, acknowledgement or payment to you for any purpose whatsoever including, but not limited to, developing, manufacturing and marketing products and creating, modifying or improving the your Mystic Dawn Account, and you hereby assign to Mystic Dawn any and all rights in any Feedback you provide. In addition, you agree not to enforce any "moral rights" in and to the Feedback, to the extent permitted by applicable law. If you send any unsolicited materials or ideas, you do so with the understanding that no additional consideration of any sort will be provided to you, and you hereby irrevocably waive any claim against Mystic Dawn and its affiliates regarding the use of such materials and ideas, even if material or an idea is used that is substantially similar to the material or idea you sent.
            <br/><br/>
            These TERMS OF USE, together with any amendments and any additional agreements you may enter into with Mystic Dawn in connection with your Mystic Dawn Account, shall constitute the entire agreement between you and Mystic Dawn concerning your Mystic Dawn Account. If any provision of these TERMS OF USE is deemed invalid by a court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of these TERMS OF USE, which shall remain in full force and effect, except that in the event of unenforceability of the universal Class Action/Jury Trial Waiver, the entire arbitration agreement shall be unenforceable.</p></div>

        <footer></footer>
    </body>
</html>
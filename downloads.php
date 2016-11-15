<?php 
	include 'core/init.php';
	redirect_login();
	include 'includes/page_starter.php'; 
?>

<div class="content">


	<table class="file-browser">
  
  
    <tr>
      <td class="folder">
        <a href="#fbbeau" class="selector">
          <img src="images/tutorials/Stylish_Facebeautiful.jpg" />
        </a>
      </td>
      <td class="tag">
      	<p>FaceBeautiful Code</p>
      </td>
    </tr>
    
    
    <tr>
      <td class="folder">
        <a href="#optifine" class="selector">
        	<img src="images/folder.png" />
        </a>
      </td>
      <td class="tag">
      	<p>Liquid Rage Town <span>[Forge + Optifine]</span></p>
      </td>
    </tr>
    
    
    <tr>
      <td class="folder">
        <a href="#shaders" class="selector">
        	<img src="images/folder.png" />
        </a>
      </td>
      <td class="tag">
      	<p>Liquid Rage Town <span>[Shaders]</span></p>
      </td>
    </tr><!-- End Folder -->
    
    
    <tr>
      <td class="folder">
        <a href="#sims3" class="selector">
        	<img src="images/folder.png" />
        </a>
      </td>
      <td class="tag">
      	<p>The Sims 3 <span>NoCD Fix</span></p>
      </td>
    </tr><!-- End Folder -->
    
    
    <tr>
      <td class="folder">
        <a href="#deerhunt" class="selector">
        	<img src="images/folder.png" />
        </a>
      </td>
      <td class="tag">
      	<p>Deer Hunter - Interactive (1997)</p>
      </td>
    </tr><!-- End Folder -->
    
    
  </table><!-- End File Browser -->




	<div class="file-viewer">
  
  
    <div class="contents" id="fbbeau">
      <table class="download-table legend-item">
        <tr class="table-label">
          <td>Download</td>
          <td>Type/Usage</td>
          <td>Size</td>
        </tr> <tr>
          <td><a href="downloads/Stylish_FaceBeautiful.txt" target="_blank">Facebeautiful Code</a></td>
          <td>TXT</td>
          <td>0.026 MB</td>
        </tr>
      </table>
      <div class="download-dets">
      	<?php echo nl2br(file_get_contents("downloads/Stylish_FaceBeautiful.txt")) ?>
      </div>
    </div><!-- End Folder Contents -->
    
    
    
    <div class="contents" id="optifine">
        <table class="download-table legend-item">
          <tr class="table-label">
            <td>Download</td>
            <td>Type/Usage</td>
            <td>Size</td>
          </tr>
          <tr>
            <td><a href="downloads/minecraft/forge-1.9-12.16.1.1887-installer.jar">Forge 1.9-12</a></td>
            <td>Installer</td>
            <td>4.0 MB</td>
          </tr>
          <tr>
            <td><a href="downloads/minecraft/liteloader-installer-1.9.0-00-SNAPSHOT.jar">LiteLoader v1.9</a></td>
            <td>Installer</td>
            <td>3.6 MB</td>
          </tr>
          <tr>
            <td><a href="downloads/minecraft/OptiFine_1.9.0_HD_U_B5.jar">Optifine v1.9.0 HD U</a></td>
            <td>Drag & Drop</td>
            <td>1.7 MB</td>
          </tr>
            <tr></tr><tr></tr>
          <tr>
            <td><a href="downloads/minecraft/How_To_Install_Forge_Optifine__by_Zfyant.zip"><font color="#00DBFF">Complete ZIP</font></a></td>
            <td></td>
            <td><font color="#808080">8.4 MB</font></td>
          </tr>
        </table>
          
        <div class="download-dets">
        	<h2><b>How To:</b></h2>
        	<ol>
          	<li>Install & Run Vanilla 1.9.x</li>
            <li>Install <span class="highlight-dl">Forge 1.9</span> <font color="#676767">(For most mods)</font></li>
            <li>Install <span class="highlight-dl">LiteLoader</span> <font color="#676767">(For minimaps & scare amount of mods)</font></li>
          		<ul><li>By "Install", I mean double click the JAR file and then select "Install"</li></ul>
          	<li>Run Minecraft to ensure everything still works</li>
          	<li>Drop <span class="highlight-dl">Optifine</span> in ".minecraft/mods" folder</li>
          	<li>Run Minecraft to ensure everything again, is still working</li>
            <li>Download shaders and drop into ".minecraft/shaderpacks" folder</li>
          </ol><br>
          
        	<h2><b>Notes:</b></h2><br>
          <ul>
          	<li>Easiest ways to reach the .minecraft folder <font color="#676767">(for PC):</font></li>
            	<ul>
              	<li>Windows + R > "%appdata% > ".minecraft"</li>
              	<li>Launch Game > go to Resource packs > click "Open Resource Pack Folder"</li>
            	</ul>
            <li>Optifine version 1.9.0 and above now incorperates Shaders within the mod, no need to fuss with "this" or "that" going "here" or "there".</li>
            <li>Additionally, 1.9.0 should work through all versions of 1.9.x</li>
            <li>Already have mass amount of mods from previous/other versions?<br>
            		Cut and paste them into a new folder named the exact version of the mod-version they pertain to.</li>
              <ul>
                <li>For example, you will also create a new folder called "1.9" in which Optifine will be placed into; the others will go into a new folder possibly named "1.7.2" or "1.7".
                You may be specific to the 2nd sub-version or remain with 2 version idtifiers instead of 3.
                The profile-manager on the Minecraft Launcher will recognize this and only use mods in the version folder of which you are launching.</li>
              </ul>
          </ul>
              
        </div><!-- End Download Details-->
        
      </div><!-- End Folder Contents -->
      
      
      
      <div class="contents" id="shaders">
        <table class="download-table legend-item">
          <tr class="table-label">
            <td>Download</td>
            <td>Type/Usage</td>
            <td>Size</td>
          </tr>
          <tr>
            <td><a href="downloads/minecraft/SEUS-v10.2-Preview-1-Ultra.zip">SEUS v10.2 Shader [0.7mb]</a></td>
            <td>ZIP</td>
            <td>? MB</td>
          </tr>
        </table>
      </div><!-- End Folder Contents -->
      
      
      
      <div class="contents" id="shaders">
        <table class="download-table legend-item">
          <tr class="table-label">
            <td>Download</td>
            <td>Type/Usage</td>
            <td>Size</td>
          </tr>
          <tr>
            <td><a href="downloads/minecraft/SEUS-v10.2-Preview-1-Ultra.zip">SEUS v10.2 Shader [0.7mb]</a></td>
            <td>ZIP</td>
            <td>? MB</td>
          </tr>
        </table>
      </div><!-- End Folder Contents -->
      
      
      
      <div class="contents" id="shaders">
        <table class="download-table legend-item">
          <tr class="table-label">
            <td>Download</td>
            <td>Type/Usage</td>
            <td>Size</td>
          </tr>
          <tr>
            <td><a href="downloads/minecraft/SEUS-v10.2-Preview-1-Ultra.zip">SEUS v10.2 Shader [0.7mb]</a></td>
            <td>ZIP</td>
            <td>? MB</td>
          </tr>
        </table>
      </div><!-- End Folder Contents -->
      
      
      
      <div class="contents" id="sims3">
        <table class="download-table legend-item">
          <tr class="table-label">
            <td>Download</td>
            <td>Type/Usage</td>
            <td>Size</td>
          </tr>
          <tr>
            <td><a href="downloads/TS3W.exe">The Sims Fix 1</a></td>
            <td>Drag & Drop</td>
            <td>? MB</td>
          </tr>
          <tr>
            <td><a href="downloads/TSLHost.dll">The Sims Fix 2</a></td>
            <td>Drag & Drop</td>
            <td>? MB</td>
          </tr>
          <tr></tr><tr></tr>
          <tr>
            <td><a href="downloads/BothInAZip.zip">Both Files In A Zip</a></td>
            <td>Drag & Drop</td>
            <td>? MB</td>
          </tr>
        </table>
      </div><!-- End Folder Contents -->
    
      <div class="contents" id="deerhunt">
        <table class="download-table legend-item">
          <tr class="table-label">
            <td>Download</td>
            <td>Type/Usage</td>
            <td>Size</td>
          <tr>
            <td><a href="downloads/Deer_Hunter_Interactive.zip">Deer Hunter Interactive (1997)</a></td>
            <td>ZIP</td>
            <td>? MB</td>
          </tr>
          </table>
      </div><!-- End Folder Contents -->
    
    </div><!-- End File Viewer -->
      
      

</div><!-- End Content Container -->
  
<?php include 'includes/footer_and_scripts.php'; ?>
	
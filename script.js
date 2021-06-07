function projectsButton() {
  if(document.getElementById("dropdownmenu").style.display != "flex") {
	document.getElementById("dropdownmenu").style.display = "flex";
  } else {
	document.getElementById("dropdownmenu").style.display = "none";
  }
}

function load() {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      json = JSON.parse(this.responseText);
      
      var projects_by_language = new Map();
      var i;
      for(i = 0; i < json.length; i++) {
		var language = json[i].Language;
		if(!projects_by_language.has(language)) {
		  projects_by_language.set(language, []);
		}
		
		projects_by_language.get(language).push(json[i].Name);
      }
	  
	  var html = "";
	  var languages = projects_by_language.keys();
	  var language;
	  for(language of languages) {
		html += "<div class=\"projectlanguage\">";
		html += "<b>" + language + "</b><br>";
		var projects_of_language = projects_by_language.get(language);
		var project;
		for(projectname of projects_of_language) {
	      html += "<a href=\"?project=" + projectname + "\"><span class=\"projectname\">" + projectname + "</span></a><br>";
		}
	    html += "</div>";
	  }
	  document.getElementById("dropdownmenu").innerHTML += html;
	  
	  
	  var urlParams = new URLSearchParams(window.location.search);
      var projectname = urlParams.get('project');
      if(!projectname) {
        document.getElementById("descriptiondiv").style.display = "initial";
      } else {
          var project;
          var i;
          for(i = 0; i < json.length; i++) {
		    if(json[i].Name == projectname) {
		      project = json[i];
		      break;
    		}
	      }
	      if(project) {
			var projectHTML = "";
			
			projectHTML += "<div class=\"projectcontainername\">" + projectname + "</div>";
			if(project.Screenshot) {
			  projectHTML += "<img src=\"" + project.Screenshot + "\" style=\"display: block;margin-left: auto;margin-right: auto;\" alt=\"Screenshot of \"" + projectname + "\"\">";
			}
			projectHTML += "<p><strong>Language:</strong> " + project.Language + "</p>";
			if(project.Libraries) {
			  projectHTML += "<p><strong>Libraries:</strong> " + project.Libraries  + " </p>";
			}
			projectHTML += "<div class=\"project_description\">" + project.Description + "</div>";
			  
    		document.getElementById("projectdiv").innerHTML = projectHTML;
	      } else {
		    document.getElementById("projectdiv").innerHTML = "Project not found";
    	  }
	      document.getElementById("projectdiv").style.display = "initial";
      }
    }
  };
  xmlhttp.open("GET", "projects.json", true);
  xmlhttp.send();
}

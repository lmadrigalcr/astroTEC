var currentActiveId = "member1";

function changeMember(elementId)
{
	var name;
	var info;
	switch(elementId)
	{
		case "member1": 
			name = "Leonardo Madrigal";
			info = "Me gusta practicar deportes. Estudio ingeniería en computación.";
			break;
		case "member2": 
			name = "José Andrés García";
			info = "No hago nada, soy vago. Estudio ingeniería en computación.";
			break;
		case "member3":
			name = "Julio Calvo";
			info = "Hago algo, me gustan cosas. Estudio ingeniería en computación.";
			break;
		case "member4":
			name = "Sebastian Segura";
			info = "Hago algo, me gustan cosas. Estudio ingeniería en computación.";
			break;
	}


	document.getElementById("memberDescription").innerHTML = info;

	document.getElementById("memberName").innerHTML = name;

	document.getElementById(currentActiveId).setAttribute("class", "");

	document.getElementById(elementId).setAttribute("class", "active");

	currentActiveId = elementId;
}
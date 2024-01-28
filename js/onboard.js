var stageOne = document.getElementById("stage_one");
var stageTwo = document.getElementById("stage_two");
var stageThree = document.getElementById("stage_three");
var buttonStageOne = document.getElementById("stage_one_button");
var buttonStageTwo = document.getElementById("stage_two_button");
var buttonStageThree = document.getElementById("stage_three_button");
var buttonStageTwoPrev = document.getElementById("stage_two_button_prev");
var buttonStageThreePrev = document.getElementById("stage_three_button_prev");

function hideStages() {
	stageOne.style.display = "none";
	stageTwo.style.display = "none";
	stageThree.style.display = "none";
}

function setStage(stage) {
	if (stage == 1 || stage == "one") {
		hideStages();
		stageOne.style.display = "block";
	}
	if (stage == 2 || stage == "two") {
		hideStages();
		stageTwo.style.display = "block";
	}
	if (stage == 3 || stage == "three") {
		hideStages();
		stageThree.style.display = "block";
	}
}

//on enterFrame
setStage(1);

//button controls
buttonStageOne.addEventListener("click", function () {
	setStage(2);
});
buttonStageTwo.addEventListener("click", function () {
	setStage(3);
});
buttonStageThree.addEventListener("click", function () {
	alert("Submit");
});
buttonStageTwoPrev.addEventListener("click", function () {
	setStage(1);
});
buttonStageThreePrev.addEventListener("click", function () {
	setStage(2);
});

let conversionType = "int";

function setConversionType(type) {
  conversionType = type;
  const inputValue = document.getElementById("inputValue");

  if (type === "int") {
    inputValue.type = "number";
    document.getElementById("realBtn").classList.add("activated-btn");
    document.getElementById("romanBtn").classList.remove("activated-btn");
  } else if (type === "roman") {
    inputValue.type = "text";
    document.getElementById("romanBtn").classList.add("activated-btn");
    document.getElementById("realBtn").classList.remove("activated-btn");
  }

  inputValue.value = "";
  document.getElementById("result").innerText = "";
}

function handleOnValueChange() {
  let value = document.getElementById("inputValue").value;

  if (value > 3000) {
    value = 3000;
  }

  if (conversionType === "roman") {
    value = value.toUpperCase();
  }

  fetch("usingClass.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: new URLSearchParams({
      type: conversionType,
      value: value,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (conversionType == "roman" && data.result > 3000) {
        document.getElementById("inputValue").value = "MMM";
        document.getElementById("result").innerText = 3000;
      } else {
        document.getElementById("inputValue").value = data.correctedValue;
        document.getElementById("result").innerText = data.result;
      }
    })
    .catch((error) => console.error("Error:", error));
}

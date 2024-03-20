document.addEventListener('DOMContentLoaded', function() {
  const uploadButton = document.getElementById('uploadButton');
  uploadButton.addEventListener('click', handleUpload);
});

function handleUpload() {
  const fileInput = document.getElementById('csvFileInput');
  const outputDiv = document.getElementById('output');

  const file = fileInput.files[0];
  const reader = new FileReader();

  reader.onload = function(event) {
    const csvData = event.target.result;
    const parsedData = parseCSV(csvData);
    outputDiv.textContent = JSON.stringify(parsedData, null, 2);
  };

  reader.readAsText(file);
}
function parseCSV(csvData) {
  const lines = csvData.split('\n');
  const headers = lines[0].split(',');
  const result = [];

  for (let i = 1; i < lines.length; i++) {
    const obj = {};
    const currentLine = lines[i].split(',');

    for (let j = 0; j < headers.length; j++) {
      obj[headers[j]] = currentLine[j];
    }

    result.push(obj);
  }

  return result;
}
$.ajax({
  type : "POST",
  url : "uploadCSV.php",
  data : {result}
})
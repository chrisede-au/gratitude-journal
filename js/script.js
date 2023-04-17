// This function creates a Bootstrap Card for each gratitude entry, and displays each card underneath the hr element.
function createGratitudeEntries() {
  const textarea = document.getElementById("textareaGratefulForToday");
  const csvData = textarea.value;
  const entries = csvData.split("\n");
  const currentDate = new Date();
  const gratitudeEntries = entries.map(entry => {
    const values = entry.split(",");
    values.push(currentDate.toLocaleString());
    return values;
  });

  const gratitudeCards = document.getElementById("gratitudeCards");

  gratitudeEntries.forEach(entry => {
    // Create Column
    const cardCol = document.createElement("div");
    cardCol.classList.add("col-sm-6", "col-lg-4", "mb-4");

    // Create card inside Column
    const card = document.createElement("div");
    card.classList.add("card", "border-info");


    // Create Card Header
    const cardHeader = document.createElement("div");
    cardHeader.classList.add("card-header");
    cardHeader.textContent = "";

    // Card Body
    const cardBody = document.createElement("div");
    cardBody.classList.add("card-body");
    cardBody.textContent = entry[entry.length - 2]; // display date and time as card header

    // Card Footer
    const cardFooter = document.createElement("div");
    cardFooter.classList.add("card-footer", "text-body-secondary");
    cardFooter.textContent = entry[entry.length - 1]; // display date and time as card header








  gratitudeCards.appendChild(cardCol);
  cardCol.appendChild(card);
  // card.appendChild(cardHeader);
  card.appendChild(cardBody);
  card.appendChild(cardFooter);
  
  });
}

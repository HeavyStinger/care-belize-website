const blueItems = [
    "Sunburn","Food poisoning","Jellyfish sting","Ear infection",
    "Traveler's diarrhea","Rash","Headache","Mild cough","Sore throat","Blisters"
];
    const redItems = [
    "Chest pain","Allergic reaction","Injury","High fever",
    "Breathing issues","Head injury","Severe bleeding","Stroke signs","Seizure","Unconscious"
];

document.querySelectorAll(".track").forEach(track => {
    const items = track.dataset.variant === "blue" ? blueItems : redItems;
    const cls = track.dataset.variant;
    // duplicate for seamless loop
    [...items, ...items].forEach(label => {
        const span = document.createElement("span");
        span.className = "pill " + cls;
        span.textContent = label;
        track.appendChild(span);
    });
});
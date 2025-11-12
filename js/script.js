const sr = ScrollReveal({
  distance: "90px",
  duration: 3000,
});

sr.reveal(`.texture-yellow`, { origin: "top", delay: 300 });
sr.reveal(`.texture-orange`, { origin: "bottom", delay: 500 });
sr.reveal(`.hero-info`, { origin: "left", delay: 1000 });
sr.reveal(`.hero-image-wrapper`, { origin: "right", delay: 1000 });

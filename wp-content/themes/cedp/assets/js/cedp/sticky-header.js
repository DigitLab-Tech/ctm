let scrollPos = (document.body.getBoundingClientRect()).top;
window.addEventListener('scroll', function(){
  if ((document.body.getBoundingClientRect()).top > scrollPos)
    document.dispatchEvent(new CustomEvent('scrollUp', {detail: { scrollPosition: scrollPos}}));
  else
    document.dispatchEvent(new CustomEvent('scrollDown', {detail: { scrollPosition: scrollPos}}));
  scrollPos = (document.body.getBoundingClientRect()).top;
});

class Sticker {
  constructor(querySelector) {
    this.stickyElement = document.querySelector('header');
  }

  stick() {
    document.addEventListener('scrollUp', (e) => {
      this.stickyElement.classList.remove("hidden");
    });

    document.addEventListener('scrollDown', (e) => {
      this.stickyElement.classList.add("hidden");
    });
  }
}
let sticker = new Sticker('header');
sticker.stick();
// https://css-tricks.com/scroll-triggered-animation-vanilla-javascript/

var hidden = 'hidden-animation';

function scrollTrigger(selector, active, options = {}) {
  let els = document.querySelectorAll(selector)
  els = Array.from(els)
  els.forEach(el => {
    addObserver(el, options, active)
  })
}
function addObserver(el, options, active) {
  // Check if `IntersectionObserver` is supported
  if(!('IntersectionObserver' in window)) {
    // Simple fallback
    // The animation/callback will be called immediately so
    // the scroll animation doesn't happen on unsupported browsers
    if(options.cb){
      options.cb(el)
    } else{
      entry.target.classList.add(active)
      entry.target.classList.remove(hidden)
    }
    // We don't need to execute the rest of the code
    return
  }
  let observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        if(options.cb) {
          options.cb(el)
        } else{
          entry.target.classList.add(active)
          entry.target.classList.remove(hidden)
        }
        observer.unobserve(entry.target)
      }
    })
  }, options)
  observer.observe(el)
}

scrollTrigger('.set-slide-in-left', 'slide-in-left', { rootMargin: '-10px', })
scrollTrigger('.set-slide-in-right', 'slide-in-right', { rootMargin: '-10px', })
listeClasseAnimation = ["slideinLeft", "slideinRight", "reveal", "slideinTop", "slideinBottom"];

listeClasseAnimation.forEach(classe => {

    const elements = document.querySelectorAll('.' + classe);

    elements.forEach(element => {

        const observer = new IntersectionObserver(entries => {

            element.classList.toggle(classe, entries[0].isIntersecting);
        })

        observer.observe(element);

    })
})
const options = {
    threshold: 0
}


const slideinLeftAnims = document.querySelectorAll('.slideinLeftAnim');

slideinLeftAnims.forEach(slideinLeftAnim => {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                slideinLeftAnim.classList.add('slideinLeft');
                observer.unobserve(slideinLeftAnim);
            }
        })
    },options)
    observer.observe(slideinLeftAnim);
})


const slideinRightAnims = document.querySelectorAll('.slideinRightAnim');

slideinRightAnims.forEach(slideinRightAnim => {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                slideinRightAnim.classList.add('slideinRight');
                observer.unobserve(slideinRightAnim);
            }
        })
    },options)
    observer.observe(slideinRightAnim);
})

const revealAnims = document.querySelectorAll('.revealAnim');

revealAnims.forEach(revealAnim => {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                revealAnim.classList.add('reveal');
                observer.unobserve(revealAnim);
            }
        })
    },options)
    observer.observe(revealAnim);
})

const slideinTopAnims = document.querySelectorAll('.slideinTopAnim');

slideinTopAnims.forEach(slideinTopAnim => {

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                slideinTopAnim.classList.add('slideinTop');
                observer.unobserve(slideinTopAnim);
            }
        })
    },options)
    observer.observe(slideinTopAnim);
})

const grids = document.querySelectorAll('.grid')
const headings = document.querySelectorAll('.heading .wrapper .text')

function enterScreen(index) {
    const grid = grids[index]
    const heading = headings[index]
    const gridColumns = grid.querySelectorAll('.column')

    grid.classList.add('active')

    gridColumns.forEach(element => {
        element.classList.remove('animate-before', 'animate-after')
    })

    heading.classList.remove('animate-before', 'animate-after')
}

function exitScreen(index, exitDelay) {
    const grid = grids[index]
    const heading = headings[index]
    const gridColumns = grid.querySelectorAll('.column')

    gridColumns.forEach(element => {
        element.classList.add('animate-after')
    })

    heading.classList.add('animate-after')

    setTimeout(() => {
        grid.classList.remove('active')
    }, exitDelay)
}

function setupAnimationCycle({ timePerScreen, exitDelay }) {
    const cycleTime = timePerScreen + exitDelay
    let nextIndex = 0

    function nextCycle() {
        const currentIndex = nextIndex

        enterScreen(currentIndex)

        setTimeout(() => exitScreen(currentIndex, exitDelay), timePerScreen)

        nextIndex = nextIndex >= grids.length - 1 ? 0 : nextIndex + 1
    }

    nextCycle()

    setInterval(nextCycle, cycleTime)
}

setupAnimationCycle({
    timePerScreen: 2000, // ms
    exitDelay: 200 * 7 // ms
})

$(".scroll").click(function() {
    $("html, body").animate({
        scrollTop: $(
            'html, body').get(0).scrollHeight / 2.8
    }, 1000);
    $(".gradient").fadeOut();
    $(".scroll").fadeOut();

    $(".up-scroll").hide();
    $(".background-bottom").hide();
    $(".wel").hide();
    $(".login").hide();

    setTimeout(function() {
        $('.up-scroll').fadeIn('slow');
    }, 700);

    setTimeout(function() {
        $('.background-bottom').fadeIn('slow');
    }, 700);

    setTimeout(function() {
        $('.wel').fadeIn('slow');
    }, 700);

    setTimeout(function() {
        $('.login').fadeIn('slow');
    }, 700);
});

$(".up-scroll").click(function() {
    $("html, body").animate({
        scrollTop: "0"
    }, 1000);

    setTimeout(function() {
        $('.gradient').fadeIn('slow');
    }, 700);

    setTimeout(function() {
        $('.scroll').fadeIn('slow');
    }, 720);

    $('.background-bottom').fadeOut();

    $('.wel').fadeOut();
});
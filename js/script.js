// $("#menu").hover(function () {
//     $('.header__dropdown').show();
// }, function () {
//     $('.header__dropdown').hide();
// });

$('#menuOne, #dropDownOne').on({
    mouseenter: function (e) {
        if (e.target.id == 'menuOne') $('#dropDownOne').show('150');
        clearTimeout($('#dropDownOne').data('timer'));
    },
    mouseleave: function () {
        $('#dropDownOne').data('timer',
            setTimeout(function () {
                $('#dropDownOne').hide('150')
            }, 300)
        );
    }
});

$('#menuTwo, #dropDownTwo').on({
    mouseenter: function (e) {
        if (e.target.id == 'menuTwo') $('#dropDownTwo').show('150');
        clearTimeout($('#dropDownTwo').data('timer'));
    },
    mouseleave: function () {
        $('#dropDownTwo').data('timer',
            setTimeout(function () {
                $('#dropDownTwo').hide('150')
            }, 300)
        );
    }
});

$('#menuThree, #dropDownThree').on({
    mouseenter: function (e) {
        if (e.target.id == 'menuThree') $('#dropDownThree').show('150');
        clearTimeout($('#dropDownThree').data('timer'));
    },
    mouseleave: function () {
        $('#dropDownThree').data('timer',
            setTimeout(function () {
                $('#dropDownThree').hide('150')
            }, 300)
        );
    }
});
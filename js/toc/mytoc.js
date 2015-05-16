$.dynatableSetup({features: {pushState: false}});

      function getRandomInt (min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }

      var $toc,
          $menuToggle,
          $tagbar,
          $content,
          $downloadBar,
          tocWidth,
          tocTop,
          tagbarHeight,
          tagbarTop,
          contentTop,
          downloadBarTop,
          scrollRatio,
          lastAnchor,
          windowLoaded;

      $(document).ready( function() {
        $toc = $('#toc-container');
        $menuToggle = $('#menu-toggle');
        $tagbar = $('#tagbar');
        $content = $('#content');
        $downloadBar = $('#download-and-share-container');
        tocWidth = $toc.outerWidth();
        tocTop = $toc.offset().top;

        $('#toc').toc({
          selectors: '#post > h2, #post > h3',
          anchorName: function(i, heading, prefix) {
            return $(heading).text().replace(/^\s+|\s+$/g, "").replace(/\s+/g, "-").replace(/([A-Z])/g, function($1){return $1.toLowerCase();});
          },
          onHighlight: function($highlighted) {
            var anchor = $highlighted.find('a').attr('href');
            if (anchor !== lastAnchor) {
              lastAnchor = anchor;
              ga('send', 'event', 'navigation', 'scroll', anchor);
            }
          }
        });
      })

      function hideMenu() {
        $toc.animate({'left': -tocWidth}, {duration: 250, complete: function() {
          $toc.hide();
        }});
        $menuToggle.animate({'left': 0}, {duration: 250});
      }
      function showMenu() {
        // Must set offset to -tocWidth + 'px' string, otherwise, jquery will subtract it from whatever the current
        // offset is, instead of setting it absolutely.
        $toc.offset({'left': -tocWidth + 'px'}).show().animate({'left': 0}, {easing: 'swing', queue: false, duration: 250});
        $menuToggle.animate({'left': tocWidth}, {easing: 'swing', queue: false, duration: 250});
      }

      function loadMountains() {
        var mountains = [],
            $splash = $('#splashbar'),
            splashWidth = $splash.width() - 100,
            splashHeight = $splash.height(),
            spacing = parseFloat(splashWidth)/7;
        for (var i=0; i < 7; i++) {
          var dim = getRandomInt(200, 500),
              pos = (i * spacing) + getRandomInt(-100,100),
              bottom = splashHeight - dim/4; 
          mountains.push('<i class="mountain" style="display: none; left: ' + pos + 'px; width: ' + dim + 'px; height: ' + dim + 'px; top: ' + bottom + 'px;"></i>');
        }
        $splash.append(mountains.join('')).find('.mountain').fadeIn();
      }

      $(window)
        .scroll(function(e){
          if (windowLoaded) {
            var scrollTop = $(this).scrollTop();

            // TOC sidebar animation and pinning
            if (scrollTop > tocTop && $toc.css('position') != 'fixed'){
              $toc.css({'position': 'fixed', 'top': '0px'});
              $menuToggle.css({'position': 'fixed', 'top': '0px'});
            }
            if (scrollTop < contentTop && $toc.css('position') != 'absolute'){
              $toc.css({'position': 'absolute', 'top': 'auto'});
              $menuToggle.css({'position': 'absolute', 'top': 'auto'});
            }
            if ($(this).width() > 768) {
              if (scrollTop > tagbarTop) {
                var leftOffset = tocWidth - (scrollTop - tagbarTop) * scrollRatio;
                if (scrollTop < (tagbarTop + tagbarHeight)) {
                  $toc.offset({'left': -(leftOffset)});
                } else if ($toc.offset().left < 0) {
                  $toc.offset({'left': 0});
                }
              } else if (scrollTop < tagbarTop) {
                $toc.offset({'left': -tocWidth});
              }
            }
          }

          // Download pinning
          //if (scrollTop > downloadBarTop && $downloadBar.css('position') != 'fixed'){
          //  $downloadBar.css({'position': 'fixed', 'top': '0px'});
          //}
          //if (scrollTop < downloadBarTop && $downloadBar.css('position') != 'static'){
          //  $downloadBar.css({'position': 'static', 'top': 'auto'});
          //}
        })
        .load(function() {
          tagbarHeight = $tagbar.outerHeight();
          tagbarTop = $tagbar.offset().top;
          contentTop = $content.offset().top;
          //downloadBarTop = $downloadBar.offset().top;
          scrollRatio = tocWidth / tagbarHeight;
          windowLoaded = true;

          loadMountains();
        })
        .resize(function() {
          tocWidth = $toc.outerWidth();
          tocTop = $toc.offset().top;
          tagbarHeight = $tagbar.outerHeight();
          tagbarTop = $tagbar.offset().top;
          contentTop = $content.offset().top;
          //downloadBarTop = $downloadBar.offset().top;
          scrollRatio = tocWidth / tagbarHeight;

          if ($(this).width() > 768) {
            if (!$toc.is(':visible')) {
              $toc.show().css({'left': 0});
            }
          } else {
            if ($toc.is(':visible')) {
              $toc.hide();
              $menuToggle.css({'left': 0});
            }
          }
        });
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                screens: {
                sm: '640px',
                md: '768px',
                lg: '1024px',
                xl: '1280px',
                '2xl': '1536px',
                },
                colors: ({ colors }) => ({
                inherit: colors.inherit,
                current: colors.current,
                transparent: colors.transparent,
                primary: "#9333EA",
                secondary: "#ff7e33",
                info: "#0C63E7",
                black: colors.black,
                white: colors.white,
                slate: colors.slate,
                gray: {
                    50: "#FAFAFC",
                    100: "#E9E9EC",
                    200: "#C6C8CD",
                    300: "#ACAEB6",
                    400: "#92959F",
                    500: "#777C87",
                    600: "#5D6370",
                    700: "#434959",
                    800: "#293041",
                    900: "#0f172a",
                },
                zinc: colors.zinc,
                neutral: colors.neutral,
                stone: colors.stone,
                red: colors.red,
                orange: colors.orange,
                amber: colors.amber,
                yellow: colors.yellow,
                lime: colors.lime,
                green: colors.green,
                emerald: colors.emerald,
                teal: colors.teal,
                cyan: colors.cyan,
                sky: colors.sky,
                blue: colors.blue,
                indigo: colors.indigo,
                violet: colors.violet,
                purple: colors.purple,
                fuchsia: colors.fuchsia,
                pink: colors.pink,
                rose: colors.rose,
                }),
                columns: {
                auto: 'auto',
                1: '1',
                2: '2',
                3: '3',
                4: '4',
                5: '5',
                6: '6',
                7: '7',
                8: '8',
                9: '9',
                10: '10',
                11: '11',
                12: '12',
                '3xs': '16rem',
                '2xs': '18rem',
                xs: '20rem',
                sm: '24rem',
                md: '28rem',
                lg: '32rem',
                xl: '36rem',
                '2xl': '42rem',
                '3xl': '48rem',
                '4xl': '56rem',
                '5xl': '64rem',
                '6xl': '72rem',
                '7xl': '80rem',
                },
                spacing: {
                px: '1px',
                0: '0px',
                0.5: '0.125rem',
                1: '0.25rem',
                1.5: '0.375rem',
                2: '0.5rem',
                2.5: '0.625rem',
                3: '0.75rem',
                3.5: '0.875rem',
                4: '1rem',
                5: '1.25rem',
                6: '1.5rem',
                7: '1.75rem',
                8: '2rem',
                9: '2.25rem',
                10: '2.5rem',
                11: '2.75rem',
                12: '3rem',
                14: '3.5rem',
                16: '4rem',
                20: '5rem',
                24: '6rem',
                28: '7rem',
                32: '8rem',
                36: '9rem',
                40: '10rem',
                44: '11rem',
                48: '12rem',
                52: '13rem',
                56: '14rem',
                60: '15rem',
                64: '16rem',
                72: '18rem',
                80: '20rem',
                96: '24rem',
                },
                animation: {
                none: 'none',
                spin: 'spin 1s linear infinite',
                ping: 'ping 1s cubic-bezier(0, 0, 0.2, 1) infinite',
                pulse: 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                bounce: 'bounce 1s infinite',
                },
                aspectRatio: {
                auto: 'auto',
                square: '1 / 1',
                video: '16 / 9',
                },
                backdropBlur: ({ theme }) => theme('blur'),
                backdropBrightness: ({ theme }) => theme('brightness'),
                backdropContrast: ({ theme }) => theme('contrast'),
                backdropGrayscale: ({ theme }) => theme('grayscale'),
                backdropHueRotate: ({ theme }) => theme('hueRotate'),
                backdropInvert: ({ theme }) => theme('invert'),
                backdropOpacity: ({ theme }) => theme('opacity'),
                backdropSaturate: ({ theme }) => theme('saturate'),
                backdropSepia: ({ theme }) => theme('sepia'),
                backgroundColor: ({ theme }) => theme('colors'),
                backgroundImage: {
                none: 'none',
                'gradient-to-t': 'linear-gradient(to top, var(--tw-gradient-stops))',
                'gradient-to-tr': 'linear-gradient(to top right, var(--tw-gradient-stops))',
                'gradient-to-r': 'linear-gradient(to right, var(--tw-gradient-stops))',
                'gradient-to-br': 'linear-gradient(to bottom right, var(--tw-gradient-stops))',
                'gradient-to-b': 'linear-gradient(to bottom, var(--tw-gradient-stops))',
                'gradient-to-bl': 'linear-gradient(to bottom left, var(--tw-gradient-stops))',
                'gradient-to-l': 'linear-gradient(to left, var(--tw-gradient-stops))',
                'gradient-to-tl': 'linear-gradient(to top left, var(--tw-gradient-stops))',
                },
                backgroundOpacity: ({ theme }) => theme('opacity'),
                backgroundPosition: {
                bottom: 'bottom',
                center: 'center',
                left: 'left',
                'left-bottom': 'left bottom',
                'left-top': 'left top',
                right: 'right',
                'right-bottom': 'right bottom',
                'right-top': 'right top',
                top: 'top',
                },
                backgroundSize: {
                auto: 'auto',
                cover: 'cover',
                contain: 'contain',
                },
                blur: {
                0: '0',
                none: '0',
                sm: '4px',
                DEFAULT: '8px',
                md: '12px',
                lg: '16px',
                xl: '24px',
                '2xl': '40px',
                '3xl': '64px',
                },
                brightness: {
                0: '0',
                50: '.5',
                75: '.75',
                90: '.9',
                95: '.95',
                100: '1',
                105: '1.05',
                110: '1.1',
                125: '1.25',
                150: '1.5',
                200: '2',
                },
                borderColor: ({ theme }) => ({
                ...theme('colors'),
                DEFAULT: theme('colors.gray.200', 'currentColor'),
                }),
                borderOpacity: ({ theme }) => theme('opacity'),
                borderRadius: {
                none: '0px',
                sm: '0.125rem',
                DEFAULT: '0.25rem',
                md: '0.375rem',
                lg: '0.5rem',
                xl: '0.75rem',
                '2xl': '1rem',
                '3xl': '1.5rem',
                full: '9999px',
                },
                borderSpacing: ({ theme }) => ({
                ...theme('spacing'),
                }),
                borderWidth: {
                DEFAULT: '1px',
                0: '0px',
                2: '2px',
                4: '4px',
                8: '8px',
                },
                boxShadow: {
                sm: '0 1px 2px 0 rgb(0 0 0 / 0.05)',
                DEFAULT: '0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1)',
                md: '0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)',
                lg: '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)',
                xl: '0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1)',
                '2xl': '0 25px 50px -12px rgb(0 0 0 / 0.25)',
                inner: 'inset 0 2px 4px 0 rgb(0 0 0 / 0.05)',
                none: 'none',
                },
                boxShadowColor: ({ theme }) => theme('colors'),
                caretColor: ({ theme }) => theme('colors'),
                accentColor: ({ theme }) => ({
                ...theme('colors'),
                auto: 'auto',
                }),
                contrast: {
                0: '0',
                50: '.5',
                75: '.75',
                100: '1',
                125: '1.25',
                150: '1.5',
                200: '2',
                },
                container: {},
                content: {
                none: 'none',
                },
                cursor: {
                auto: 'auto',
                default: 'default',
                pointer: 'pointer',
                wait: 'wait',
                text: 'text',
                move: 'move',
                help: 'help',
                'not-allowed': 'not-allowed',
                none: 'none',
                'context-menu': 'context-menu',
                progress: 'progress',
                cell: 'cell',
                crosshair: 'crosshair',
                'vertical-text': 'vertical-text',
                alias: 'alias',
                copy: 'copy',
                'no-drop': 'no-drop',
                grab: 'grab',
                grabbing: 'grabbing',
                'all-scroll': 'all-scroll',
                'col-resize': 'col-resize',
                'row-resize': 'row-resize',
                'n-resize': 'n-resize',
                'e-resize': 'e-resize',
                's-resize': 's-resize',
                'w-resize': 'w-resize',
                'ne-resize': 'ne-resize',
                'nw-resize': 'nw-resize',
                'se-resize': 'se-resize',
                'sw-resize': 'sw-resize',
                'ew-resize': 'ew-resize',
                'ns-resize': 'ns-resize',
                'nesw-resize': 'nesw-resize',
                'nwse-resize': 'nwse-resize',
                'zoom-in': 'zoom-in',
                'zoom-out': 'zoom-out',
                },
                divideColor: ({ theme }) => theme('borderColor'),
                divideOpacity: ({ theme }) => theme('borderOpacity'),
                divideWidth: ({ theme }) => theme('borderWidth'),
                dropShadow: {
                sm: '0 1px 1px rgb(0 0 0 / 0.05)',
                DEFAULT: ['0 1px 2px rgb(0 0 0 / 0.1)', '0 1px 1px rgb(0 0 0 / 0.06)'],
                md: ['0 4px 3px rgb(0 0 0 / 0.07)', '0 2px 2px rgb(0 0 0 / 0.06)'],
                lg: ['0 10px 8px rgb(0 0 0 / 0.04)', '0 4px 3px rgb(0 0 0 / 0.1)'],
                xl: ['0 20px 13px rgb(0 0 0 / 0.03)', '0 8px 5px rgb(0 0 0 / 0.08)'],
                '2xl': '0 25px 25px rgb(0 0 0 / 0.15)',
                none: '0 0 #0000',
                },
                fill: ({ theme }) => theme('colors'),
                grayscale: {
                0: '0',
                DEFAULT: '100%',
                },
                hueRotate: {
                0: '0deg',
                15: '15deg',
                30: '30deg',
                60: '60deg',
                90: '90deg',
                180: '180deg',
                },
                invert: {
                0: '0',
                DEFAULT: '100%',
                },
                flex: {
                1: '1 1 0%',
                auto: '1 1 auto',
                initial: '0 1 auto',
                none: 'none',
                },
                flexBasis: ({ theme }) => ({
                auto: 'auto',
                ...theme('spacing'),
                '1/2': '50%',
                '1/3': '33.333333%',
                '2/3': '66.666667%',
                '1/4': '25%',
                '2/4': '50%',
                '3/4': '75%',
                '1/5': '20%',
                '2/5': '40%',
                '3/5': '60%',
                '4/5': '80%',
                '1/6': '16.666667%',
                '2/6': '33.333333%',
                '3/6': '50%',
                '4/6': '66.666667%',
                '5/6': '83.333333%',
                '1/12': '8.333333%',
                '2/12': '16.666667%',
                '3/12': '25%',
                '4/12': '33.333333%',
                '5/12': '41.666667%',
                '6/12': '50%',
                '7/12': '58.333333%',
                '8/12': '66.666667%',
                '9/12': '75%',
                '10/12': '83.333333%',
                '11/12': '91.666667%',
                full: '100%',
                }),
                flexGrow: {
                0: '0',
                DEFAULT: '1',
                },
                flexShrink: {
                0: '0',
                DEFAULT: '1',
                },
                fontFamily: {
                sans: [
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'BlinkMacSystemFont',
                    '"Segoe UI"',
                    'Roboto',
                    '"Helvetica Neue"',
                    'Arial',
                    '"Noto Sans"',
                    'sans-serif',
                    '"Apple Color Emoji"',
                    '"Segoe UI Emoji"',
                    '"Segoe UI Symbol"',
                    '"Noto Color Emoji"',
                ],
                serif: ['ui-serif', 'Georgia', 'Cambria', '"Times New Roman"', 'Times', 'serif'],
                mono: [
                    'ui-monospace',
                    'SFMono-Regular',
                    'Menlo',
                    'Monaco',
                    'Consolas',
                    '"Liberation Mono"',
                    '"Courier New"',
                    'monospace',
                ],
                },
                fontSize: {
                xs: ['0.75rem', { lineHeight: '1rem' }],
                sm: ['0.875rem', { lineHeight: '1.25rem' }],
                base: ['1rem', { lineHeight: '1.5rem' }],
                lg: ['1.125rem', { lineHeight: '1.75rem' }],
                xl: ['1.25rem', { lineHeight: '1.75rem' }],
                '2xl': ['1.5rem', { lineHeight: '2rem' }],
                '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
                '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
                '5xl': ['3rem', { lineHeight: '1' }],
                '6xl': ['3.75rem', { lineHeight: '1' }],
                '7xl': ['4.5rem', { lineHeight: '1' }],
                '8xl': ['6rem', { lineHeight: '1' }],
                '9xl': ['8rem', { lineHeight: '1' }],
                },
                fontWeight: {
                thin: '100',
                extralight: '200',
                light: '300',
                normal: '400',
                medium: '500',
                semibold: '600',
                bold: '700',
                extrabold: '800',
                black: '900',
                },
                gap: ({ theme }) => theme('spacing'),
                gradientColorStops: ({ theme }) => theme('colors'),
                gridAutoColumns: {
                auto: 'auto',
                min: 'min-content',
                max: 'max-content',
                fr: 'minmax(0, 1fr)',
                },
                gridAutoRows: {
                auto: 'auto',
                min: 'min-content',
                max: 'max-content',
                fr: 'minmax(0, 1fr)',
                },
                gridColumn: {
                auto: 'auto',
                'span-1': 'span 1 / span 1',
                'span-2': 'span 2 / span 2',
                'span-3': 'span 3 / span 3',
                'span-4': 'span 4 / span 4',
                'span-5': 'span 5 / span 5',
                'span-6': 'span 6 / span 6',
                'span-7': 'span 7 / span 7',
                'span-8': 'span 8 / span 8',
                'span-9': 'span 9 / span 9',
                'span-10': 'span 10 / span 10',
                'span-11': 'span 11 / span 11',
                'span-12': 'span 12 / span 12',
                'span-full': '1 / -1',
                },
                gridColumnEnd: {
                auto: 'auto',
                1: '1',
                2: '2',
                3: '3',
                4: '4',
                5: '5',
                6: '6',
                7: '7',
                8: '8',
                9: '9',
                10: '10',
                11: '11',
                12: '12',
                13: '13',
                },
                gridColumnStart: {
                auto: 'auto',
                1: '1',
                2: '2',
                3: '3',
                4: '4',
                5: '5',
                6: '6',
                7: '7',
                8: '8',
                9: '9',
                10: '10',
                11: '11',
                12: '12',
                13: '13',
                },
                gridRow: {
                auto: 'auto',
                'span-1': 'span 1 / span 1',
                'span-2': 'span 2 / span 2',
                'span-3': 'span 3 / span 3',
                'span-4': 'span 4 / span 4',
                'span-5': 'span 5 / span 5',
                'span-6': 'span 6 / span 6',
                'span-full': '1 / -1',
                },
                gridRowStart: {
                auto: 'auto',
                1: '1',
                2: '2',
                3: '3',
                4: '4',
                5: '5',
                6: '6',
                7: '7',
                },
                gridRowEnd: {
                auto: 'auto',
                1: '1',
                2: '2',
                3: '3',
                4: '4',
                5: '5',
                6: '6',
                7: '7',
                },
                gridTemplateColumns: {
                none: 'none',
                1: 'repeat(1, minmax(0, 1fr))',
                2: 'repeat(2, minmax(0, 1fr))',
                3: 'repeat(3, minmax(0, 1fr))',
                4: 'repeat(4, minmax(0, 1fr))',
                5: 'repeat(5, minmax(0, 1fr))',
                6: 'repeat(6, minmax(0, 1fr))',
                7: 'repeat(7, minmax(0, 1fr))',
                8: 'repeat(8, minmax(0, 1fr))',
                9: 'repeat(9, minmax(0, 1fr))',
                10: 'repeat(10, minmax(0, 1fr))',
                11: 'repeat(11, minmax(0, 1fr))',
                12: 'repeat(12, minmax(0, 1fr))',
                },
                gridTemplateRows: {
                none: 'none',
                1: 'repeat(1, minmax(0, 1fr))',
                2: 'repeat(2, minmax(0, 1fr))',
                3: 'repeat(3, minmax(0, 1fr))',
                4: 'repeat(4, minmax(0, 1fr))',
                5: 'repeat(5, minmax(0, 1fr))',
                6: 'repeat(6, minmax(0, 1fr))',
                },
                height: ({ theme }) => ({
                auto: 'auto',
                ...theme('spacing'),
                '1/2': '50%',
                '1/3': '33.333333%',
                '2/3': '66.666667%',
                '1/4': '25%',
                '2/4': '50%',
                '3/4': '75%',
                '1/5': '20%',
                '2/5': '40%',
                '3/5': '60%',
                '4/5': '80%',
                '1/6': '16.666667%',
                '2/6': '33.333333%',
                '3/6': '50%',
                '4/6': '66.666667%',
                '5/6': '83.333333%',
                full: '100%',
                screen: '100vh',
                min: 'min-content',
                max: 'max-content',
                fit: 'fit-content',
                }),
                inset: ({ theme }) => ({
                auto: 'auto',
                ...theme('spacing'),
                '1/2': '50%',
                '1/3': '33.333333%',
                '2/3': '66.666667%',
                '1/4': '25%',
                '2/4': '50%',
                '3/4': '75%',
                full: '100%',
                }),
                keyframes: {
                spin: {
                    to: {
                    transform: 'rotate(360deg)',
                    },
                },
                ping: {
                    '75%, 100%': {
                    transform: 'scale(2)',
                    opacity: '0',
                    },
                },
                pulse: {
                    '50%': {
                    opacity: '.5',
                    },
                },
                bounce: {
                    '0%, 100%': {
                    transform: 'translateY(-25%)',
                    animationTimingFunction: 'cubic-bezier(0.8,0,1,1)',
                    },
                    '50%': {
                    transform: 'none',
                    animationTimingFunction: 'cubic-bezier(0,0,0.2,1)',
                    },
                },
                },
                letterSpacing: {
                tighter: '-0.05em',
                tight: '-0.025em',
                normal: '0em',
                wide: '0.025em',
                wider: '0.05em',
                widest: '0.1em',
                },
                lineHeight: {
                none: '1',
                tight: '1.25',
                snug: '1.375',
                normal: '1.5',
                relaxed: '1.625',
                loose: '2',
                3: '.75rem',
                4: '1rem',
                5: '1.25rem',
                6: '1.5rem',
                7: '1.75rem',
                8: '2rem',
                9: '2.25rem',
                10: '2.5rem',
                },
                listStyleType: {
                none: 'none',
                disc: 'disc',
                decimal: 'decimal',
                },
                margin: ({ theme }) => ({
                auto: 'auto',
                ...theme('spacing'),
                }),
                maxHeight: ({ theme }) => ({
                ...theme('spacing'),
                full: '100%',
                screen: '100vh',
                min: 'min-content',
                max: 'max-content',
                fit: 'fit-content',
                }),
                maxWidth: ({ theme, breakpoints }) => ({
                none: 'none',
                0: '0rem',
                xs: '20rem',
                sm: '24rem',
                md: '28rem',
                lg: '32rem',
                xl: '36rem',
                '2xl': '42rem',
                '3xl': '48rem',
                '4xl': '56rem',
                '5xl': '64rem',
                '6xl': '72rem',
                '7xl': '80rem',
                full: '100%',
                min: 'min-content',
                max: 'max-content',
                fit: 'fit-content',
                prose: '65ch',
                ...breakpoints(theme('screens')),
                }),
                minHeight: {
                0: '0px',
                full: '100%',
                screen: '100vh',
                min: 'min-content',
                max: 'max-content',
                fit: 'fit-content',
                },
                minWidth: {
                0: '0px',
                full: '100%',
                min: 'min-content',
                max: 'max-content',
                fit: 'fit-content',
                },
                objectPosition: {
                bottom: 'bottom',
                center: 'center',
                left: 'left',
                'left-bottom': 'left bottom',
                'left-top': 'left top',
                right: 'right',
                'right-bottom': 'right bottom',
                'right-top': 'right top',
                top: 'top',
                },
                opacity: {
                0: '0',
                5: '0.05',
                10: '0.1',
                20: '0.2',
                25: '0.25',
                30: '0.3',
                40: '0.4',
                50: '0.5',
                60: '0.6',
                70: '0.7',
                75: '0.75',
                80: '0.8',
                90: '0.9',
                95: '0.95',
                100: '1',
                },
                order: {
                first: '-9999',
                last: '9999',
                none: '0',
                1: '1',
                2: '2',
                3: '3',
                4: '4',
                5: '5',
                6: '6',
                7: '7',
                8: '8',
                9: '9',
                10: '10',
                11: '11',
                12: '12',
                },
                padding: ({ theme }) => theme('spacing'),
                placeholderColor: ({ theme }) => theme('colors'),
                placeholderOpacity: ({ theme }) => theme('opacity'),
                outlineColor: ({ theme }) => theme('colors'),
                outlineOffset: {
                0: '0px',
                1: '1px',
                2: '2px',
                4: '4px',
                8: '8px',
                },
                outlineWidth: {
                0: '0px',
                1: '1px',
                2: '2px',
                4: '4px',
                8: '8px',
                },
                ringColor: ({ theme }) => ({
                DEFAULT: theme(`colors.blue.500`, '#3b82f6'),
                ...theme('colors'),
                }),
                ringOffsetColor: ({ theme }) => theme('colors'),
                ringOffsetWidth: {
                0: '0px',
                1: '1px',
                2: '2px',
                4: '4px',
                8: '8px',
                },
                ringOpacity: ({ theme }) => ({
                DEFAULT: '0.5',
                ...theme('opacity'),
                }),
                ringWidth: {
                DEFAULT: '3px',
                0: '0px',
                1: '1px',
                2: '2px',
                4: '4px',
                8: '8px',
                },
                rotate: {
                0: '0deg',
                1: '1deg',
                2: '2deg',
                3: '3deg',
                6: '6deg',
                12: '12deg',
                45: '45deg',
                90: '90deg',
                180: '180deg',
                },
                saturate: {
                0: '0',
                50: '.5',
                100: '1',
                150: '1.5',
                200: '2',
                },
                scale: {
                0: '0',
                50: '.5',
                75: '.75',
                90: '.9',
                95: '.95',
                100: '1',
                105: '1.05',
                110: '1.1',
                125: '1.25',
                150: '1.5',
                },
                scrollMargin: ({ theme }) => ({
                ...theme('spacing'),
                }),
                scrollPadding: ({ theme }) => theme('spacing'),
                sepia: {
                0: '0',
                DEFAULT: '100%',
                },
                skew: {
                0: '0deg',
                1: '1deg',
                2: '2deg',
                3: '3deg',
                6: '6deg',
                12: '12deg',
                },
                space: ({ theme }) => ({
                ...theme('spacing'),
                }),
                stroke: ({ theme }) => theme('colors'),
                strokeWidth: {
                0: '0',
                1: '1',
                2: '2',
                },
                textColor: ({ theme }) => theme('colors'),
                textDecorationColor: ({ theme }) => theme('colors'),
                textDecorationThickness: {
                auto: 'auto',
                'from-font': 'from-font',
                0: '0px',
                1: '1px',
                2: '2px',
                4: '4px',
                8: '8px',
                },
                textUnderlineOffset: {
                auto: 'auto',
                0: '0px',
                1: '1px',
                2: '2px',
                4: '4px',
                8: '8px',
                },
                textIndent: ({ theme }) => ({
                ...theme('spacing'),
                }),
                textOpacity: ({ theme }) => theme('opacity'),
                transformOrigin: {
                center: 'center',
                top: 'top',
                'top-right': 'top right',
                right: 'right',
                'bottom-right': 'bottom right',
                bottom: 'bottom',
                'bottom-left': 'bottom left',
                left: 'left',
                'top-left': 'top left',
                },
                transitionDelay: {
                75: '75ms',
                100: '100ms',
                150: '150ms',
                200: '200ms',
                300: '300ms',
                500: '500ms',
                700: '700ms',
                1000: '1000ms',
                },
                transitionDuration: {
                DEFAULT: '150ms',
                75: '75ms',
                100: '100ms',
                150: '150ms',
                200: '200ms',
                300: '300ms',
                500: '500ms',
                700: '700ms',
                1000: '1000ms',
                },
                transitionProperty: {
                none: 'none',
                all: 'all',
                DEFAULT:
                    'color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter',
                colors: 'color, background-color, border-color, text-decoration-color, fill, stroke',
                opacity: 'opacity',
                shadow: 'box-shadow',
                transform: 'transform',
                },
                transitionTimingFunction: {
                DEFAULT: 'cubic-bezier(0.4, 0, 0.2, 1)',
                linear: 'linear',
                in: 'cubic-bezier(0.4, 0, 1, 1)',
                out: 'cubic-bezier(0, 0, 0.2, 1)',
                'in-out': 'cubic-bezier(0.4, 0, 0.2, 1)',
                },
                translate: ({ theme }) => ({
                ...theme('spacing'),
                '1/2': '50%',
                '1/3': '33.333333%',
                '2/3': '66.666667%',
                '1/4': '25%',
                '2/4': '50%',
                '3/4': '75%',
                full: '100%',
                }),
                width: ({ theme }) => ({
                auto: 'auto',
                ...theme('spacing'),
                '1/2': '50%',
                '1/3': '33.333333%',
                '2/3': '66.666667%',
                '1/4': '25%',
                '2/4': '50%',
                '3/4': '75%',
                '1/5': '20%',
                '2/5': '40%',
                '3/5': '60%',
                '4/5': '80%',
                '1/6': '16.666667%',
                '2/6': '33.333333%',
                '3/6': '50%',
                '4/6': '66.666667%',
                '5/6': '83.333333%',
                '1/12': '8.333333%',
                '2/12': '16.666667%',
                '3/12': '25%',
                '4/12': '33.333333%',
                '5/12': '41.666667%',
                '6/12': '50%',
                '7/12': '58.333333%',
                '8/12': '66.666667%',
                '9/12': '75%',
                '10/12': '83.333333%',
                '11/12': '91.666667%',
                full: '100%',
                screen: '100vw',
                min: 'min-content',
                max: 'max-content',
                fit: 'fit-content',
                }),
                willChange: {
                auto: 'auto',
                scroll: 'scroll-position',
                contents: 'contents',
                transform: 'transform',
                },
                zIndex: {
                auto: 'auto',
                0: '0',
                10: '10',
                20: '20',
                30: '30',
                40: '40',
                50: '50',
                },
            },
        }
    </script>
</head>

<body class="bg-white dark:bg-gray-900">
    <nav class="z-10 w-full absolute">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative">
                <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer">
                <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0">
                    <a href="#home" aria-label="logo" class="flex space-x-2 items-center">
                        <div aria-hidden="true" class="flex space-x-1">
                            <div class="h-4 w-4 rounded-full bg-gray-900 dark:bg-white"></div>
                            <div class="h-6 w-2 bg-primary"></div>
                        </div>
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">OKE-ECO</span>
                    </a>

                    <div class="relative flex items-center lg:hidden max-h-10">
                        <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative  p-6 -mr-6">
                            <div aria-hidden="true" id="line" class="m-auto h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                            <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                        </label>
                    </div>
                </div>
                <div aria-hidden="true" class="fixed z-10 inset-0 h-screen w-screen bg-white/70 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70"></div>
                <div class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1  absolute top-full left-0 transition-all duration-300 scale-95 origin-top 
                            lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none
                            peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none 
                            dark:shadow-none dark:bg-gray-800 dark:border-gray-700">

                    <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0">
                        <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0">
                            <li>
                                <a href="#features" class="block md:px-4 transition hover:text-primary">
                                    <span>Features</span>
                                </a>
                            </li>
                            <li>
                                <a href="#solution" class="block md:px-4 transition hover:text-primary">
                                    <span>Solution</span>
                                </a>
                            </li>
                            <li>
                                <a href="#testimonials" class="block md:px-4 transition hover:text-primary">
                                    <span>Testimonials</span>
                                </a>
                            </li>
                            <li>
                                <a href="#blog" class="block md:px-4 transition hover:text-primary">
                                    <span>Blog</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-12 lg:mt-0">
                        <a
                            href="#"
                            class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-sm font-semibold text-white">Get Started</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative" id="home">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative pt-36 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <h1 class="text-gray-900 dark:text-white font-bold text-5xl md:text-6xl xl:text-7xl">B3 Terurus, <span class="text-primary dark:text-white">Bumi Terjaga!</span></h1>
                    <p class="mt-8 text-gray-700 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio incidunt nam itaque sed eius modi error totam sit illum. Voluptas doloribus asperiores quaerat aperiam. Quidem harum omnis beatae ipsum soluta!</p>
                    <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                        <a
                            href="#"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-base font-semibold text-white">Get started</span>
                        </a>
                        <a
                            href="#"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-transparent before:bg-primary/10 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max">
                            <span
                                class="relative text-base font-semibold text-primary dark:text-white">Learn more</span>
                        </a>
                    </div>
                    <div class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between">
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The lowest price</h6>
                            <p class="mt-2 text-gray-500">Some text here</p>
                        </div>
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The fastest on the market</h6>
                            <p class="mt-2 text-gray-500">Some text here</p>
                        </div>
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">The most loved</h6>
                            <p class="mt-2 text-gray-500">Some text here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="mt-40">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="md:w-2/3 lg:w-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-secondary">
                    <path fill-rule="evenodd" d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z" clip-rule="evenodd" />
                </svg>
                
                <h2 class="my-8 text-2xl font-bold text-gray-700 dark:text-white md:text-4xl">
                    Macam Informasi dan Pengetahuan
                </h2>
            </div>
            <div class="mt-8 grid divide-x divide-y divide-gray-100 dark:divide-gray-700 overflow-hidden rounded-3xl border border-gray-100 text-gray-600 dark:border-gray-700 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
                <div class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8">
                    <img
                        src="https://cdn-icons-png.flaticon.com/512/4341/4341139.png"
                        class="w-12"
                        width="512"
                        height="512"
                        alt="burger illustration"
                    />

                    <div class="space-y-2">
                        <h5
                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary"
                        >
                        First feature
                        </h5>
                        <p class="text-gray-600 dark:text-gray-300">
                        Neque Dolor, fugiat non cum doloribus aperiam voluptates nostrum.
                        </p>
                    </div>
                    <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                        <span class="text-sm">Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>                
                    </a>
                    </div>
                </div>
                <div class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8">
                    <img
                        src="https://cdn-icons-png.flaticon.com/512/4341/4341134.png"
                        class="w-12"
                        width="512"
                        height="512"
                        alt="burger illustration"
                    />

                    <div class="space-y-2">
                        <h5
                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary"
                        >
                        Second feature
                        </h5>
                        <p class="text-gray-600 dark:text-gray-300">
                        Neque Dolor, fugiat non cum doloribus aperiam voluptates nostrum.
                        </p>
                    </div>
                    <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                        <span class="text-sm">Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>                
                    </a>
                    </div>
                </div>
                <div class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8">
                    <img
                        src="https://cdn-icons-png.flaticon.com/512/4341/4341160.png"
                        class="w-12"
                        width="512"
                        height="512"
                        alt="burger illustration"
                    />

                    <div class="space-y-2">
                        <h5
                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary"
                        >
                        Third feature
                        </h5>
                        <p class="text-gray-600 dark:text-gray-300">
                        Neque Dolor, fugiat non cum doloribus aperiam voluptates nostrum.
                        </p>
                    </div>
                    <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                        <span class="text-sm">Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>                
                    </a>
                    </div>
                </div>
                <div class="group relative bg-gray-50 dark:bg-gray-900 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                    <div
                    class="relative space-y-8 py-12 p-8 transition duration-300 group-hover:bg-white dark:group-hover:bg-gray-800"
                    >
                    <img
                        src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png"
                        class="w-12"
                        width="512"
                        height="512"
                        alt="burger illustration"
                    />

                    <div class="space-y-2">
                        <h5
                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary"
                        >
                        More features
                        </h5>
                        <p class="text-gray-600 dark:text-gray-300">
                        Neque Dolor, fugiat non cum doloribus aperiam voluptates nostrum.
                        </p>
                    </div>
                    <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                        <span class="text-sm">Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>                
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="solution" class="mt-20">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sky-500">
                <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z" clip-rule="evenodd" />
            </svg>
            
            <div class="space-y-6 justify-between text-gray-600 md:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
                <div class="md:5/12 lg:w-1/2">
                    <img
                        src="./../assets/svg/pie.svg"
                        alt="image"
                        loading="lazy"
                        width=""
                        height=""
                        class="w-full"
                    />
                </div>
                <div class="md:7/12 lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        Pengelolaan B3 yang Tepat, Untuk Masa Depan yang Hebat!
                    </h2>
                    <p class="my-8 text-gray-600 dark:text-gray-300">
                    Sampah merupakan persoalan yang akan selalu mengikuti setiap aktivitas manusia. Sampah dapat berasal dari berbagai kegiatan masyarakat, seperti pertanian, pasar,rumah tangga, industri, dan sekolah (Cahyono & Budi, 2021)
                    Tiga jenis sampah dapat berasal dari aktivitas manusia: sampah organik, sampah anorganik, dan sampah B3. <br> <br> Sampah B3 (Bahan Berbahaya dan Beracun) adalah limbah yang mengandung zat berbahaya atau beracun yang dapat membahayakan kesehatan manusia, hewan, dan lingkungan jika tidak dikelola dengan benar. Sampah B3 dapat berbentuk padat, cair dan gas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-20 md:py-40">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="m-auto md:w-10/12 lg:w-8/12 xl:w-6/12">
                <div class="flex flex-wrap items-center justify-between md:flex-nowrap">
                    <div class="flex flex-row w-full justify-center space-x-12 text-gray-600 dark:text-gray-300 sm:w-7/12 md:justify-start">
                        <ul role="list" class="space-y-8">
                            <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    class="w-5"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"
                                    />
                                </svg>
                                <span>Github</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    class="w-5"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
                                    />
                                </svg>
                                <span>YouTube</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    class="w-5"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                    />
                                </svg>
                                <span>Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="m-auto mt-16 w-10/12 space-y-6 text-center sm:mt-auto sm:w-5/12 sm:text-left">
                        <span class="block text-gray-500 dark:text-gray-400"
                        >Kita merubah sampah menjadi bahan serbaguna.</span
                        >
            
                        <span class="block text-gray-500 dark:text-gray-400">Oke Eco &copy; <span id="year"></span></span>
            
                        <!-- <span class="flex justify-between text-gray-600 dark:text-white">
                        <a href="#" class="font-medium">Terms of Use </a>
                        <a href="#" class="font-medium"> Privacy Policy</a>
                        </span>
            
                        <span class="block text-gray-500 dark:text-gray-400"
                        >Need help? <a href="#" class="font-semibold text-gray-600 dark:text-white"> Contact Us</a></span
                        > -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
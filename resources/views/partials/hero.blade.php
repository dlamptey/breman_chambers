@php
    $title = $title ?? 'Modern legal counsel for ambitious ventures';
    $subtitle = $subtitle
        ?? 'Strategic advisors partnering with founders, funds, and family offices to navigate complex transactions, governance, and growth.';
    $actions = $actions ?? [
        [
            'label' => 'Start a conversation',
            'href' => '#consult',
            'variant' => 'primary',
        ],
        [
            'label' => 'View our expertise',
            'href' => '#expertise',
            'variant' => 'ghost',
        ],
    ];
@endphp

<section class="relative isolate overflow-hidden bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 py-24 sm:py-32">
    <div class="absolute inset-0">
        <div class="pointer-events-none absolute -top-1/2 left-1/2 h-[28rem] w-[28rem] -translate-x-1/2 rounded-full bg-sky-500/20 blur-3xl sm:h-[32rem] sm:w-[32rem]"></div>
    </div>

    <div class="relative mx-auto flex max-w-6xl flex-col gap-10 px-4 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
        <div class="max-w-2xl">
            <p class="text-xs uppercase tracking-[0.35em] text-sky-400/80">Breman Chambers</p>
            <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-50 sm:text-5xl lg:text-6xl">
                {{ $title }}
            </h1>
            <p class="mt-6 text-lg text-slate-300">
                {{ $subtitle }}
            </p>

            @if (! empty($actions))
                <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:items-center">
                    @foreach ($actions as $action)
                        @php
                            $isPrimary = ($action['variant'] ?? 'primary') === 'primary';
                        @endphp
                        <a
                            href="{{ $action['href'] }}"
                            @class([
                                'inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-semibold transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-sky-400 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-900',
                                'bg-sky-400 text-slate-950 hover:bg-sky-300' => $isPrimary,
                                'border border-slate-700/80 text-slate-200 hover:border-slate-500 hover:bg-slate-900/60' => ! $isPrimary,
                            ])
                        >
                            {{ $action['label'] }}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="relative flex w-full max-w-md flex-col gap-6 rounded-3xl border border-slate-800 bg-slate-950/80 p-8 shadow-lg shadow-sky-900/10 backdrop-blur">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-slate-400">Response time</p>
                    <p class="text-lg font-semibold text-slate-100">Within 2 business hours</p>
                </div>
                <span class="rounded-full border border-sky-400/40 bg-sky-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-widest text-sky-200">
                    Dedicated
                </span>
            </div>

            <div class="rounded-2xl border border-slate-800 bg-slate-900/80 p-6">
                <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Primary focus</p>
                <h2 class="mt-4 text-2xl font-semibold text-slate-100">Transactions & Governance</h2>
                <p class="mt-3 text-sm text-slate-400">
                    Structured counsel for capital raises, secondary offerings, and strategic acquisitions.
                </p>
            </div>

            <ul class="grid gap-3 text-sm text-slate-300">
                <li class="flex items-center gap-3">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-sky-500/10 text-sky-300">
                        &bull;
                    </span>
                    Emerging funds & family offices
                </li>
                <li class="flex items-center gap-3">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-sky-500/10 text-sky-300">
                        &bull;
                    </span>
                    Founder & executive advisory
                </li>
                <li class="flex items-center gap-3">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-sky-500/10 text-sky-300">
                        &bull;
                    </span>
                    Cross-border governance
                </li>
            </ul>
        </div>
    </div>
</section>


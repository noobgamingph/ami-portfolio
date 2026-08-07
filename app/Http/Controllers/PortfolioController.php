<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index', [
            'skills' => $this->skills(),
            'projects' => $this->projects(),
            'socials' => $this->socials(),
        ]);
    }

    private function skills(): array
    {
        return [
            'PHP', 'Laravel', 'Livewire', 'Vue', 'React', 'JavaScript',
            'TypeScript', 'MySQL', 'PostgreSQL', 'Tailwind CSS',
            'REST APIs', 'Redis', 'Docker', 'Git', 'CI/CD', 'Node.js',
        ];
    }

    private function projects(): array
    {
        return [
            [
                'title' => 'Capstone Systems',
                'description' => 'End-to-end college thesis projects — from system analysis and design to a working, defense-ready application with complete documentation.',
                'tags' => ['College Thesis', 'Laravel', 'MySQL'],
                'gradient' => 'from-indigo-500/30 to-violet-500/30',
                'icon' => 'CT',
                'category' => 'Thesis',
            ],
            [
                'title' => 'Graduate Research Tools',
                'description' => 'Masters-level research applications and data analysis tools built to support thesis experimentation, data collection and statistical reporting.',
                'tags' => ['Masters Thesis', 'Laravel', 'Charts'],
                'gradient' => 'from-violet-500/30 to-fuchsia-500/30',
                'icon' => 'GR',
                'category' => 'Thesis',
            ],
            [
                'title' => 'Open Source Utilities',
                'description' => 'Small tools and libraries I build for my own workflow and publish openly — CLI helpers, scraping bots and productivity scripts.',
                'tags' => ['Personal', 'PHP', 'Node.js'],
                'gradient' => 'from-cyan-500/30 to-sky-500/30',
                'icon' => 'OS',
                'category' => 'Personal',
            ],
            [
                'title' => 'Interactive Experiments',
                'description' => 'Side experiments and mini-apps where I explore new stacks, UI ideas and animations — quick prototypes turned into polished demos.',
                'tags' => ['Personal', 'Vue', 'Tailwind'],
                'gradient' => 'from-teal-500/30 to-emerald-500/30',
                'icon' => 'IE',
                'category' => 'Personal',
            ],
            [
                'title' => 'Business Landing Pages',
                'description' => 'Conversion-focused one-page websites for small businesses — service pages, portfolios and booking pages with fast, mobile-first design.',
                'tags' => ['Business', 'Laravel', 'SEO'],
                'gradient' => 'from-amber-500/30 to-orange-500/30',
                'icon' => 'BP',
                'category' => 'Business',
            ],
            [
                'title' => 'E-commerce Storefronts',
                'description' => 'Online stores for local shops and startups — product catalogs, carts and simple checkout integrated with local payment options.',
                'tags' => ['Business', 'Laravel', 'Payments'],
                'gradient' => 'from-rose-500/30 to-pink-500/30',
                'icon' => 'EC',
                'category' => 'Business',
            ],
        ];
    }

    private function socials(): array
    {
        return [
            ['name' => 'GitHub', 'handle' => 'github.com/ami-dev', 'url' => 'https://github.com'],
            ['name' => 'LinkedIn', 'handle' => 'linkedin.com/in/ami-dev', 'url' => 'https://www.linkedin.com'],
            ['name' => 'Email', 'handle' => 'hello@ami.dev', 'url' => 'mailto:hello@ami.dev'],
        ];
    }
}

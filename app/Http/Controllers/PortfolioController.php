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
                'title' => 'InvoiceFlow',
                'description' => 'A SaaS invoicing platform with recurring billing, PDF generation and real-time payment tracking built on Laravel.',
                'tags' => ['Laravel', 'Livewire', 'MySQL', 'Stripe'],
                'gradient' => 'from-emerald-500/30 to-cyan-500/30',
                'icon' => 'IN',
            ],
            [
                'title' => 'ShopCart',
                'description' => 'Headless e-commerce storefront with a Vue cart, GraphQL catalog and a Laravel-powered admin panel.',
                'tags' => ['Vue', 'Laravel', 'GraphQL', 'Tailwind'],
                'gradient' => 'from-violet-500/30 to-fuchsia-500/30',
                'icon' => 'SC',
            ],
            [
                'title' => 'TaskPilot',
                'description' => 'Team task manager with kanban boards, granular role permissions and activity-driven notifications.',
                'tags' => ['React', 'Laravel', 'Redis', 'Pusher'],
                'gradient' => 'from-cyan-500/30 to-blue-500/30',
                'icon' => 'TP',
            ],
            [
                'title' => 'DevMetrics',
                'description' => 'Developer analytics dashboard aggregating GitHub and CI data into clean, actionable performance charts.',
                'tags' => ['PHP', 'Laravel', 'Charts', 'API'],
                'gradient' => 'from-amber-500/30 to-orange-500/30',
                'icon' => 'DM',
            ],
            [
                'title' => 'BiteBoard',
                'description' => 'Restaurant reservation and menu management system with multi-branch support and QR table ordering.',
                'tags' => ['Laravel', 'MySQL', 'Tailwind', 'Livewire'],
                'gradient' => 'from-rose-500/30 to-pink-500/30',
                'icon' => 'BB',
            ],
            [
                'title' => 'CloudDeploy',
                'description' => 'One-click deployment service with Docker image building, health checks and zero-downtime rollouts.',
                'tags' => ['Docker', 'Laravel', 'Node.js', 'Webhooks'],
                'gradient' => 'from-lime-500/30 to-emerald-500/30',
                'icon' => 'CD',
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

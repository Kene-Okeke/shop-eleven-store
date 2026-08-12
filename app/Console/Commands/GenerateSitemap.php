<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

#[Signature('sitemap:generate')]
#[Description('Generate the ShopEleven sitemap')]
class GenerateSitemap extends Command
{
    public function handle()
    {
        Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/shop'))
            ->add(Url::create('/cart'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');

        return Command::SUCCESS;
    }
}
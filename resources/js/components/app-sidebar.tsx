import { NavFooter } from '@/components/nav-footer';
import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { 
    BookOpen, 
    LayoutGrid, 
    GraduationCap, 
    Users, 
    School, 
    Book, 
    ClipboardList, 
    FileBarChart,
    UserCircle
} from 'lucide-react';
import AppLogo from './app-logo';

// Menu Utama Dashboard
const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
        icon: LayoutGrid,
    },
];

// Menu Master Data SD
const masterDataItems: NavItem[] = [
    {
        title: 'Data Siswa',
        href: 'pages/siswa',
        icon: GraduationCap,
    },
    {
        title: 'Data Guru',
        href: 'pages/guru',
        icon: Users,
    },
    {
        title: 'Data Kelas',
        href: 'pages/kelas',
        icon: School,
    },
];

// Menu Akademik & Laporan
const akademikItems: NavItem[] = [
    {
        title: 'Mata Pelajaran',
        href: 'pages/mapel',
        icon: Book,
    },
    {
        title: 'Input Nilai',
        href: 'pages/nilai',
        icon: ClipboardList,
    },
    {
        title: 'Laporan',
        href: 'pages/laporan',
        icon: FileBarChart,
    },
];

const footerNavItems: NavItem[] = [
    {
        title: 'Profil Sekolah',
        href: 'pages/profile',
        icon: UserCircle,
    },
    {
        title: 'Dokumentasi',
        href: 'https://laravel.com/docs',
        icon: BookOpen,
    },
];

export function AppSidebar() {
    return (
        <Sidebar collapsible="icon" variant="inset" className="bg-[#0f172a]">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href="/dashboard" prefetch>
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                {/* Section Dashboard */}
                <NavMain items={mainNavItems} />

                {/* Section Data Master */}
                <div className="px-3 py-2">
                    <h2 className="mb-2 px-4 text-xs font-semibold tracking-tight text-slate-500 uppercase">
                        Manajemen Data
                    </h2>
                    <NavMain items={masterDataItems} />
                </div>

                {/* Section Akademik */}
                <div className="px-3 py-2">
                    <h2 className="mb-2 px-4 text-xs font-semibold tracking-tight text-slate-500 uppercase">
                        Akademik
                    </h2>
                    <NavMain items={akademikItems} />
                </div>
            </SidebarContent>

            <SidebarFooter>
                <NavFooter items={footerNavItems} className="mt-auto" />
                <NavUser />
            </SidebarFooter>
        </Sidebar>
    );
}

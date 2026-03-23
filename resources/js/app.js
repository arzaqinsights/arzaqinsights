import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;
gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;
Alpine.plugin(intersect);
Alpine.start();

// Basic smooth scroll setup for GSAP
document.addEventListener('DOMContentLoaded', () => {
    // Add default fade in up animation class handler
    const animateElements = document.querySelectorAll('.gsap-fade-up');
    
    animateElements.forEach((el) => {
        gsap.fromTo(el, 
            { y: 50, opacity: 0 },
            { 
                y: 0, 
                opacity: 1, 
                duration: 1, 
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            }
        );
    });

    // Custom cursor effect
    const cursor = document.getElementById('custom-cursor');
    if(cursor) {
        document.addEventListener('mousemove', (e) => {
            gsap.to(cursor, {
                x: e.clientX,
                y: e.clientY,
                duration: 0.1,
                ease: 'power2.out'
            });
        });
        
        // Hover effects on links/buttons
        const interactables = document.querySelectorAll('a, button, .cursor-hover');
        interactables.forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('scale-150', 'bg-white/50'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('scale-150', 'bg-white/50'));
        });
    }
});


window.toggleModal = function(id) {
    const modal = document.getElementById(id);
    if (!modal) return;

    modal.classList.toggle('hidden');

    if (modal._outsideClickListener) {
        document.removeEventListener('click', modal._outsideClickListener);
        modal._outsideClickListener = null;
    }

    if (!modal.classList.contains('hidden')) {
        setTimeout(() => {
            modal._outsideClickListener = function(event) {
                if (event.target === modal || !modal.contains(event.target)) {
                    modal.classList.add('hidden');
                    document.removeEventListener('click', modal._outsideClickListener);
                    modal._outsideClickListener = null;
                }
            };
            document.addEventListener('click', modal._outsideClickListener);
        }, 10);
    }
};

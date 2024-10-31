import { Viewer } from '@grapecity/activereports/reportviewer';
import '@grapecity/activereports/styles/ar-js-ui.css';
import '@grapecity/activereports/styles/ar-js-viewer.css';
import '@grapecity/activereports-localization';

document.addEventListener('DOMContentLoaded', async function() {
    const viewer = new Viewer('#viewer', {
        language: 'ja'
    });
    
    try {
        const response = await fetch('/reports/Invoice_green_ipa.rdlx-json');
        const report = await response.json();
        viewer.open(report);
    } catch (error) {
        console.error('Error loading report:', error);
    }
});